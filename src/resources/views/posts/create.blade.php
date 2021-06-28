@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card margin_card">
                <div class="card-header">投稿ページ</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">漁港名</label>
                                @if($errors->has('port_name'))
                                    @foreach($errors->get('port_name') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach    
                                @endif
                                
                                <!-- <input type="text" class="form-control" name="port_name" value="{{ old('port_name') }}" id="exampleFormControlInput1" placeholder="漁港名を入力"> -->
                                <select name="port_id" id="exampleFormControlSelect1">
                                    <option value="1">松前港</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">都道府県</label>
                                @if($errors->has('prefectures_id'))
                                    @foreach($errors->get('prefectures_id') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach    
                                @endif
                                <select class="form-control" name="prefectures_id" id="exampleFormControlSelect1">
                                    <option value="0" >選択してください</option>
                                    <option value="1" @if(old('prefectures_id') =='1') selected  @endif>北海道</option>
                                    <option value="2" @if(old('prefectures_id') =='2') selected  @endif>青森県</option>
                                    <option value="3" @if(old('prefectures_id') =='3') selected  @endif>岩手県</option>
                                    <option value="4" @if(old('prefectures_id') =='4') selected  @endif>宮城県</option>
                                    <option value="5" @if(old('prefectures_id') =='5') selected  @endif>秋田県</option>
                                    <option value="6" @if(old('prefectures_id') =='6') selected  @endif>山形県</option>
                                    <option value="7" @if(old('prefectures_id') =='7') selected  @endif>福島県</option>
                                    <option value="8" @if(old('prefectures_id') =='8') selected  @endif>茨城県</option>
                                    <option value="9" @if(old('prefectures_id') =='9') selected  @endif>栃木県</option>
                                    <option value="10" @if(old('prefectures_id') =='10') selected  @endif>群馬県</option>
                                    <option value="11" @if(old('prefectures_id') =='11') selected  @endif>埼玉県</option>
                                    <option value="12" @if(old('prefectures_id') =='12') selected  @endif>千葉県</option>
                                    <option value="13" @if(old('prefectures_id') =='13') selected  @endif>東京都</option>
                                    <option value="14" @if(old('prefectures_id') =='14') selected  @endif>神奈川県</option>
                                    <option value="15" @if(old('prefectures_id') =='15') selected  @endif>新潟県</option>
                                    <option value="16" @if(old('prefectures_id') =='16') selected  @endif>富山県</option>
                                    <option value="17" @if(old('prefectures_id') =='17') selected  @endif>石川県</option>
                                    <option value="18" @if(old('prefectures_id') =='18') selected  @endif>福井県</option>
                                    <option value="19" @if(old('prefectures_id') =='19') selected  @endif>山梨県</option>
                                    <option value="20" @if(old('prefectures_id') =='20') selected  @endif>長野県</option>
                                    <option value="21" @if(old('prefectures_id') =='21') selected  @endif>岐阜県</option>
                                    <option value="22" @if(old('prefectures_id') =='22') selected  @endif>静岡県</option>
                                    <option value="23" @if(old('prefectures_id') =='23') selected  @endif>愛知県</option>
                                    <option value="24" @if(old('prefectures_id') =='24') selected  @endif>三重県</option>
                                    <option value="25" @if(old('prefectures_id') =='25') selected  @endif>滋賀県</option>
                                    <option value="26" @if(old('prefectures_id') =='26') selected  @endif>京都府</option>
                                    <option value="27" @if(old('prefectures_id') =='27') selected  @endif>大阪府</option>
                                    <option value="28" @if(old('prefectures_id') =='28') selected  @endif>兵庫県</option>
                                    <option value="29" @if(old('prefectures_id') =='29') selected  @endif>奈良県</option>
                                    <option value="30" @if(old('prefectures_id') =='30') selected  @endif>和歌山県</option>
                                    <option value="31" @if(old('prefectures_id') =='31') selected  @endif>鳥取県</option>
                                    <option value="32" @if(old('prefectures_id') =='32') selected  @endif>島根県</option>
                                    <option value="33" @if(old('prefectures_id') =='33') selected  @endif>岡山県</option>
                                    <option value="34" @if(old('prefectures_id') =='34') selected  @endif>広島県</option>
                                    <option value="35" @if(old('prefectures_id') =='35') selected  @endif>山口県</option>
                                    <option value="36" @if(old('prefectures_id') =='36') selected  @endif>徳島県</option>
                                    <option value="37" @if(old('prefectures_id') =='37') selected  @endif>香川県</option>
                                    <option value="38" @if(old('prefectures_id') =='38') selected  @endif>愛媛県</option>
                                    <option value="39" @if(old('prefectures_id') =='39') selected  @endif>高知県</option>
                                    <option value="40" @if(old('prefectures_id') =='40') selected  @endif>福岡県</option>
                                    <option value="41" @if(old('prefectures_id') =='41') selected  @endif>佐賀県</option>
                                    <option value="42" @if(old('prefectures_id') =='42') selected  @endif>長崎県</option>
                                    <option value="43" @if(old('prefectures_id') =='43') selected  @endif>熊本県</option>
                                    <option value="44" @if(old('prefectures_id') =='44') selected  @endif>大分県</option>
                                    <option value="45" @if(old('prefectures_id') =='45') selected  @endif>宮崎県</option>
                                    <option value="46" @if(old('prefectures_id') =='46') selected  @endif>鹿児島県</option>
                                    <option value="47" @if(old('prefectures_id') =='47') selected  @endif>沖縄県</option>
                                </select>
                            </div>
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">内容</label>
                                @if($errors->has('content'))
                                    @foreach($errors->get('content') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach    
                                @endif
                                <textarea class="form-control " name="content" id="exampleFormControlTextarea1" placeholder="ここに釣行の内容を入力" rows="3">{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">画像</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ">投稿！</button>
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