@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="l-content margin_card">
                <div class=""></div>
                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class=" text-center">
                            <div class=" text-left">
                                <a href="{{ route('users.show', [ $posts->user_id ]) }}">
                                    {{ $posts->user->name }}
                                </a>    
                            </div>
                            <div class="">
                                <h3 class="card-title text-left">施設名：{{ $posts->port_name }}</h3>
                                <a href="{{ route('posts.index', [ 'prefectures_id' => $posts->prefectures_id ]) }}">
                                    <h6 class="card-text text-left">[{{ $posts->prefecture->prefectures_name }}]</h7>
                                </a>
                                <h5 class="card-text text-left">内容：{{ $posts->content }}</h5>
                                <div class="">
                                    @if($posts->image_path)
                                        <img src="{{ $posts->image_path }}" alt="画像">
                                    @endif
                                </div>
                                <a href="{{ route('posts.index') }}" class="btn btn-primary">戻る</a>
                            </div>
                        </div>
                    </div>
                <div class="comment-card">
                    <h4 class="">コメント一覧</h4>
                    @foreach($posts->comments as $comment)
                    <div class="comment-list">
                        <h5 class="name">{{ $comment->user->name }}</h5>
                        <p class="comment">{{ $comment->comment }}</p>
                    </div>
                    @endforeach
                    <a href="{{ route('comments.create', ['post_id' => $posts->id]) }}" class="btn btn-primary">コメントする</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection