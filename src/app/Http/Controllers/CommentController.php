<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

use App\Comment;


class CommentController extends Controller
{
    /**
     * コメント作成画面
     * 
     * @param array $query
     * @return view
     */
    public function create()
    {
        $query = \Request::query();

        return view('comments.comment_create', [
            'post_id' => $query['post_id'],
        ]);
    }

    /**
     * コメントをDBに保存
     * 
     * @param object $comment
     * @param object $input
     * @return redirect
     */
    public function store(CommentRequest $request)
    {
        $comment = new Comment;
        $input = $request->only($comment->getFillable());
        $comment = $comment->create($input);
        session()->flash('flash_message', '投稿が完了しました');
        return redirect('/posts/'.$request->post_id);
    }

    /**
     * コメント削除
     * 
     * @param object $comment
     * @return redirect
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        session()->flash('flash_message', '削除が完了しました');
        return redirect('/posts/'.$comment->post_id);
    }
}
