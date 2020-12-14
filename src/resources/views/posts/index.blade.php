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
                                {{ $post->user->name }}
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-left">{{ $post->facility_name }}</h3>
                                <h6 class="card-text text-left">{{ $post->prefecture->prefectures_name }}</h7>
                                <h5 class="card-text">{{ $post->content }}</h5>
                                <a href="#" class="btn btn-primary">詳細</a>
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