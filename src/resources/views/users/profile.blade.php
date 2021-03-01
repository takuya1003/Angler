@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card margin_card">
                <div class="card-header">プロフィール編集ページ</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('users.update', $users->id) }}"> 
                        @method('PATCH')
                        @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">名前</label>
                                <input type="text" value="{{ $users->name }}" class="form-control" name="name" id="exampleFormControlInput1" placeholder="名前を入力">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">釣り歴</label>
                                <select name="fishing_history" id="">
                                    <option value="{{ $users->fishing_history }}">{{ $users->fishing_history }}</option>
                                    @for($i = 1;$i < 11; $i++)
                                        @if($i == 10)
                                            <option value="10年以上">10年以上</option>
                                        @else    
                                            <option value="{{ $i }}年">{{ $i }}年</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <label for="exampleFormControlInput1">好きな釣法</label>
                            </div>
                            @if($users->fishing_method == "ルアー釣り")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fishing_method" id="inlineRadio1" value="ルアー釣り"　checked="checked">
                                <label class="form-check-label" for="inlineRadio1">ルアー釣り</label>
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="fishing_method" id="inlineRadio1" value="エサ釣り" >
                                    <label class="form-check-label" for="inlineRadio1">エサ釣り</label>
                            </div>
                            @elseif($users->fishing_method == "エサ釣り")
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fishing_method" id="inlineRadio1" value="ルアー釣り">
                                <label class="form-check-label" for="inlineRadio1">ルアー釣り</label>
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="fishing_method" id="inlineRadio1" value="エサ釣り" checked="checked">
                                    <label class="form-check-label" for="inlineRadio1">エサ釣り</label>
                            </div>
                            @else
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fishing_method" id="inlineRadio1" value="ルアー釣り">
                                <label class="form-check-label" for="inlineRadio1">ルアー釣り</label>
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="fishing_method" id="inlineRadio1" value="エサ釣り">
                                    <label class="form-check-label" for="inlineRadio1">エサ釣り</label>
                            </div>
                            @endif
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ">編集！</button>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection