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
                        <div class="card text-center">
                            <div class="card-header text-left">
                                {{ $posts->user->name }}
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-left">施設名：{{ $posts->facility_name }}</h3>
                                <h6 class="card-text text-left">[{{ $posts->prefecture->prefectures_name }}]</h7>
                                <h5 class="card-text text-left">内容：{{ $posts->content }}</h5>
                                <a href="{{ route('posts.index') }}" class="btn btn-primary">戻る</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection