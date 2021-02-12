@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="l-content margin_card">
                <div class=""></div>
                    <div class="">
                        @if (session('flash_message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('flash_message') }}
                            </div>
                        @endif
                        <div class=" text-center">
                            <div class=" text-left">
                                <a href="{{ route('users.show', [ $posts->user_id ]) }}">
                                    {{ $posts->user->name }}
                                </a>    
                            </div>
                            <div class="">
                                <h3 class="card-title text-left">漁港名：{{ $posts->port_name }}</h3>
                                <a href="{{ route('posts.index', [ 'prefectures_id' => $posts->prefectures_id ]) }}">
                                    <h6 class="card-text text-left">[{{ $posts->prefecture->prefectures_name }}]</h7>
                                </a>
                                <h5 class="card-text text-left">内容：{{ $posts->content }}</h5>
                                <div class="">
                                    @if($posts->image_path)
                                        <img src="{{ $posts->image_path }}" alt="画像">
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="comment-card">
                        <h4 class="">コメント一覧</h4>
                        @foreach($posts->comments as $comment)
                        <div class="comment-list">
                            <a href="{{ route('users.show', [ $posts->user_id ]) }}">
                                <h5 class="name">{{ $comment->user->name }}</h5>
                            </a>
                            <p class="comment">{{ $comment->comment }}</p>
                            <small class="comment-time">{{ $comment->created_at }}</small>
                            @if(Auth::id() == $comment->user->id)
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                @method('DELETE')
                                @CSRF
                                    <button type="submit" class="btn btn-danger del-btn" onclick="return disp()">削除</button>
                                </form>
                            @endif
                        </div>
                        @endforeach
                        <a href="{{ route('comments.create', ['post_id' => $posts->id]) }}" class="btn btn-info btn-comment">コメントする</a>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-back">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection