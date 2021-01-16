@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="l-content is-noPaddingBottom">
                @if(Auth::id() == $user->id) 
                    <a href="{{ route('users.edit', $user->id) }}">プロフィールを編集</a>
                @endif
                <div class="p-mypage">
                    <h5>名前：{{ $user->name}}</h5>
                    <p>釣り歴：{{ $user->fishing_history }}</p>
                    <p>好きな釣法：{{ $user->fishing_method }}</p>
                </div>
            </div>
            <div class="l-conteiners_main">        
                    @foreach($user->posts as $post)
                    <div class="l-content">
                        <div class="p-postCardList">
                            <a href="{{ route('posts.index', [ 'user_id' => $post->user_id ]) }}">
                                {{ $post->user->name }}
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title text-left">
                                施設名：
                                <a href="#">
                                    {{ $post->port_name }} 
                                </a>
                            </h3>
                            <h6 class="card-text text-left">
                                <a href="{{ route('posts.index', [ 'prefectures_id' => $post->prefectures_id ]) }}">
                                    [{{ $post->prefecture->prefectures_name }}]
                                </a>
                            </h7>
                            <h5 class="card-text text-left">内容：{{ $post->content }}</h5>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
                            @if(Auth::id() == $user->id)
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編集</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-primary" onclick="return disp()">削除</button>
                                </form>
                                
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection