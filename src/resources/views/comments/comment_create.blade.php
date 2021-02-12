@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card margin_card">
                <div class="card-header">コメント</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                            <div class="form-group">
                                @if($errors->has('comment'))
                                    @foreach($errors->get('comment') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach    
                                @endif
                                <textarea class="form-control " name="comment" id="exampleFormControlTextarea1" placeholder="コメントを入力" rows="3">{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ">投稿！</button>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <input type="hidden" name="post_id" value="{{ $post_id }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection