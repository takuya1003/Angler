@extends('layouts.app')

@section('content')
@guest
<div class="top_content">
    <div class="top_content_item">
        <img src="{{ asset('img/4340451_m.jpg') }}"  alt="">
        <div class="top_content_item"><h2 id="char">さあ、釣りに出かけよう！！</h2></div>
    </div>
</div>
@endguest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($posts as $post)
                        <article>
                        <div class="l-content">
                            <div class="p-postCardList">
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
                                @if($post->image_path)
                                    <img src="{{ $post->image_path }}" alt="画像">
                                @endif
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