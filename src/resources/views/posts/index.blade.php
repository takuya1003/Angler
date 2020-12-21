@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($posts as $post)
                        <div class="card text-center">
                            <div class="card-header text-left">
                                <a href="{{ route('posts.index', [ 'user_id' => $post->user_id ]) }}">
                                    {{ $post->user->name }}
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-left">
                                    施設名：
                                    <a href="#">
                                        {{ $post->facility_name }} 
                                    </a>
                                </h3>
                                <h6 class="card-text text-left">
                                    <a href="{{ route('posts.index', [ 'prefectures_id' => $post->prefectures_id ]) }}">
                                        [{{ $post->prefecture->prefectures_name }}]
                                    </a>
                                </h7>
                                <h5 class="card-text text-left">内容：{{ $post->content }}</h5>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection