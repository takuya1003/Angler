<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;
use\App\Prefecture;
use\App\Comment;
use Illuminate\Support\Facades\Auth;
use\App\Http\Requests\StoreAnglerPost;
use JD\Cloudder\Facades\Cloudder;

class PostController extends Controller
{
    //投稿一覧表示
    public function index()
    {
        //現在のクエリを配列で取得
        $query = \Request::query();
        
        if(!empty($query['prefectures_id'])){
            $posts = Post::where('prefectures_id', $query['prefectures_id'])->latest()->get();
            $posts->load('prefecture', 'user');
            $prefecture = Prefecture::find($query['prefectures_id'], 'prefectures_name');
            return view('posts.index', [
                'posts' => $posts,
                'prefecture' => $prefecture
            ]);
        }else{
            $posts = Post::latest()->get();
            $posts->load('prefecture', 'user');
            return view('posts.index', compact('posts'));
        }

    }

    //投稿画面
    public function create()
    {
        if(empty(Auth::id())){
            //ログインしていなければ404ページにリダイレクト
            return redirect(404);
        }
        return view('posts.create');
    }

    //投稿されたデータをDBに保存
    public function store(StoreAnglerPost $request)
    {
        //Postクラスのインスタンス
        $post = new Post;

        //ユーザーが画像をアップロードした時の処理
        if ($image = $request->file('image')) {
            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            //直前にアップロードされた画像のpublicIdを取得する。
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId, [
                'width'     => 300,
                'height'    => 300
            ]);
            $post->image_path = $logoUrl;
            $post->public_id  = $publicId;
        }

        $post->fill($request->all())->save();
        session()->flash('flash_message', '投稿が完了しました');
        return redirect('/');
    }

    //投稿データの詳細
    public function show($id)
    {
        $posts = Post::find($id);
        $posts->load('prefecture','user','comments');
        return view('posts.show', compact('posts'));
    }

    //編集画面
    public function edit($id)
    {

        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));
    }

    //編集したデータをアップデート
    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $post->fill($request->all())->save();
        return redirect('/');
    }

    //投稿データを削除
    public function destroy($id)
    {
        $posts = Post::find($id);

        if(isset($posts->public_id)){
            Cloudder::destroyImage($posts->public_id);
        }
        $posts->delete();

        session()->flash('flash_message', '削除が完了しました');
        $auth = Auth::id();
        return redirect('/users/'.$auth);
    }
}
