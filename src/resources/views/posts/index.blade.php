@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class=>
                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($posts as $post)
                        <article>
                        <div class="info">
                            <div class="">
                                <a href="{{ route('posts.index', [ 'user_id' => $post->user_id ]) }}">
                                    {{ $post->user->name }}
                                </a>
                            </div>
                            <div class="">
                                <h3 class="">
                                    漁港名：
                                    <a href="#">
                                        {{ $post->port_name }} 
                                    </a>
                                </h3>
                                <h6 class="">
                                    <a href="{{ route('posts.index', [ 'prefectures_id' => $post->prefectures_id ]) }}">
                                        [{{ $post->prefecture->prefectures_name }}]
                                    </a>
                                </h7>
                                <h5 class="">内容：{{ $post->content }}</h5>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
                            </div>
                        </div>
                        </article>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection