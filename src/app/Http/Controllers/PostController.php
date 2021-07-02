<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;
use\App\Prefecture;
use\App\Comment;
use\App\Port;
use Illuminate\Support\Facades\Auth;
use\App\Http\Requests\StoreAnglerPost;
use JD\Cloudder\Facades\Cloudder;

class PostController extends Controller
{
    /**
     * 投稿一覧表示
     * 
     * @param array $query
     * @param bool $check 
     * @param object $posts
     * @param int $port_id
     * @param int $prefecture_id
     * @param object $prefecture
     * 
     * @return view
     */
    public function index()
    {
        //現在のクエリを配列で取得
        $query = \Request::query();
        $check = false;

        if(!empty($query['prefectures_id'])){
            $prefecture_id = $query['prefectures_id'];
            $posts = Post::List_By_Prefectures($prefecture_id);
            $prefecture = Prefecture::find($prefecture_id, 'prefectures_name');
            return view('posts.index', [
                'posts' => $posts,
                'prefecture' => $prefecture,
                'check' => $check
            ]);
        }elseif(!empty($query['port_id'])){
            $port_id = $query['port_id'];
            $posts = Post::List_By_Port($port_id);
            $check = true;

            return view('posts.index', [
                'posts' => $posts,
                'check' => $check,
                'port_name' => $ports
            ]);
        }else{
            $posts = Post::Get_Postdata();
           // dd($posts);
            return view('posts.index', [
                'posts' => $posts,
                'check' => $check
            ]);
        }
    }

    /**
     * 投稿画面表示
     * 
     * @return view
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * 投稿されたデータをDBに保存
     * 
     * @param object $post
     * @param object $image
     * @param int $publicId
     * @param string $logoUrl
     * @return redirect
     */
    public function store(StoreAnglerPost $request)
    {
        
        $post = new Post;

        //ユーザーが画像をアップロードした時の処理
        if ($image = $request->file('image')) {
            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            //直前にアップロードされた画像のpublicIdを取得する
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

    /**
     * 投稿データの詳細
     * 
     * @param object $posts
     * @return view 
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show', compact('posts'));
    }

    /**
     * 編集画面
     * 
     * @param object $posts
     * @return view
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));
    }

    /**
     * 編集したデータをアップデート
     * 
     * @param object $posts
     * @return redirect
     */
    public function update(StoreAnglerPost $request, $id)
    {

        $post = Post::find($id);
        $post->fill($request->all())->save();
        return redirect('/');
    }

    /**
     * 投稿データを削除
     * 
     * @param object $posts
     * @param int $auth
     * @return redirect
     */
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
