<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //ユーザー情報入力画面
    public function create()
    {
        return view('users.create');
    }

    //ユーザー情報をDBに登録
    public function store(Request $request, $id)
    {
        $inputs = $request->all();
        $users = User::find($id);
        $users->fill([
            'name' => $inputs['name'],
            'fishing_history' => $inputs['fishing_history'],
            'fishing_method' => $inputs['fishing_method']
        ]);
        $users->save();
        $auth = Auth::id();
        return redirect('/users/'.$auth);
    }

    //ユーザー詳細画面
    public function show(User $user)
    {
        $user->load('posts');
        return view('users.show', compact('user'));
    }

    //プロフィール編集画面
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.profile', compact('users'));
    }
}
