<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

use App\Comment;


class CommentController extends Controller
{
    //コメント作成画面
    public function create()
    {
        $q = \Request::query();

        return view('comments.comment_create', [
            'post_id' => $q['post_id'],
        ]);
    }

    //コメントをDBに保存
    public function store(CommentRequest $request)
    {
        $comment = new Comment;
        $input = $request->only($comment->getFillable());
        $comment = $comment->create($input);
        session()->flash('flash_message', '投稿が完了しました');
        return redirect('/posts/'.$request->post_id);
    }

    //コメント削除
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        session()->flash('flash_message', '削除が完了しました');
        return redirect('/posts/'.$comment->post_id);
    }
}
