<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;
use\App\Prefecture;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = \Request::query();
        
        if(!empty($query['prefectures_id'])){
            $posts = Post::where('prefectures_id', $query['prefectures_id'])->latest()->get();
            $posts->load('prefecture', 'user');
            return view('posts.index', compact('posts'));

        }elseif(!empty($query['user_id'])){
            $posts = Post::where('user_id', $query['user_id'])->latest()->get();
            $posts->load('prefecture', 'user');
            return view('posts.index', compact('posts'));

        }else{
            $posts = Post::latest()->get();
            $posts->load('prefecture', 'user');
            return view('posts.index', compact('posts'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->fill($request->all())->save();
        

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $inputs = $request->all();
        $post = Post::find($id);
        $post->fill([
            'port_name' => $inputs['port_name'],
            'prefectures_id' => $inputs['prefectures_id'],
            'content' => $inputs['content']
        ]);
        $post->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id)->delete();
        $auth = Auth::id();
        return redirect('/users/'.$auth);
    }
}
