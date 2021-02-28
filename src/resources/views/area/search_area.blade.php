@extends('layouts.app')

@section('content')
<div class="container">
    <div id="jmap">
        <div id="japan-map" class="clearfix">

        <div id="hokkaido-touhoku" class="clearfix">
            <p class="area-title">北海道・東北</p>
            <div class="area">
                <a href="{{ route('posts.index', [ 'prefectures_id' => 1 ]) }}">
                    <div id="hokkaido">
                        <p>北海道</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 2 ]) }}">
                    <div id="aomori">
                        <p>青森</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 5 ]) }}">
                    <div id="akita">
                        <p>秋田</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 3 ]) }}">
                    <div id="iwate">
                        <p>岩手</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 6 ]) }}">
                    <div id="yamagata">
                        <p>山形</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 4 ]) }}">
                    <div id="miyagi">
                        <p>宮城</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 7 ]) }}">
                    <div id="fukushima">
                        <p>福島</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="kantou">
            <p class="area-title">関東</p>
            <div class="area">
                <a href="{{ route('posts.index', [ 'prefectures_id' => 10 ]) }}">
                    <div id="gunma">
                        <p>群馬</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 9 ]) }}">
                    <div id="tochigi">
                        <p>栃木</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 8 ]) }}">
                    <div id="ibaraki">
                        <p>茨城</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 11 ]) }}">
                    <div id="saitama">
                        <p>埼玉</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 12 ]) }}">
                    <div id="chiba">
                        <p>千葉</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 13 ]) }}">
                    <div id="tokyo">
                        <p>東京</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 14 ]) }}">
                    <div id="kanagawa">
                        <p>神奈川</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="tyubu" class="clearfix">
            <p class="area-title">中部</p>
            <div class="area">
                <a href="{{ route('posts.index', [ 'prefectures_id' => 15 ]) }}">
                    <div id="nigata">
                        <p>新潟</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 16 ]) }}">
                    <div id="toyama">
                        <p>富山</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 17 ]) }}">
                    <div id="ishikawa">
                        <p>石川</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 18 ]) }}">
                    <div id="fukui">
                        <p>福井</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 20 ]) }}">
                    <div id="nagano">
                        <p>長野</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 21 ]) }}">
                    <div id="gifu">
                        <p>岐阜</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 19 ]) }}">
                    <div id="yamanashi">
                        <p>山梨</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 23 ]) }}">
                    <div id="aichi">
                        <p>愛知</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 22 ]) }}">
                    <div id="shizuoka">
                        <p>静岡県</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="kinki" class="clearfix">
            <p class="area-title">近畿</p>
            <div class="area">
                <a href="{{ route('posts.index', [ 'prefectures_id' => 26 ]) }}">
                    <div id="kyoto">
                        <p>京都</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 25 ]) }}">
                    <div id="shiga">
                        <p>滋賀</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 27 ]) }}">
                    <div id="osaka">
                        <p>大阪</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 29 ]) }}">
                    <div id="nara">
                        <p>奈良</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 24 ]) }}">
                    <div id="mie">
                        <p>三重</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 30 ]) }}">
                    <div id="wakayama">
                        <p>和歌山</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 28 ]) }}">
                    <div id="hyougo">
                        <p>兵庫</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="tyugoku" class="clearfix">
            <p class="area-title">中国</p>
            <div class="area">
                <a href="{{ route('posts.index', [ 'prefectures_id' => 31 ]) }}">
                    <div id="tottori">
                        <p>鳥取</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 33 ]) }}">
                    <div id="okayama">
                        <p>岡山</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 32 ]) }}">
                    <div id="shimane">
                        <p>島根</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 34 ]) }}">
                    <div id="hiroshima">
                        <p>広島</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 35 ]) }}">
                    <div id="yamaguchi">
                        <p>山口</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="shikoku" class="clearfix">
            <p class="area-title">四国</p>
            <div class="area">
                <a href="{{ route('posts.index', [ 'prefectures_id' => 37 ]) }}">
                    <div id="kagawa">
                        <p>香川</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 38 ]) }}">
                    <div id="ehime">
                        <p>愛媛</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 36 ]) }}">
                    <div id="tokushima">
                        <p>徳島</p>
                    </div>
                </a>
                <a href="{{ route('posts.index', [ 'prefectures_id' => 39 ]) }}">
                    <div id="kouchi">
                        <p>高知</p>
                    </div>
                </a>
            </div>
        </div>

            <div id="kyusyu" class="clearfix">
                <p class="area-title">九州・沖縄</p>
                <div class="area">
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 40 ]) }}">
                        <div id="fukuoka">
                            <p>福岡</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 41 ]) }}">
                        <div id="saga">
                            <p>佐賀</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 42 ]) }}">
                        <div id="nagasaki">
                            <p>長崎</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 44 ]) }}">
                        <div id="oita">
                            <p>大分</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 43 ]) }}">
                        <div id="kumamoto">
                            <p>熊本</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 45 ]) }}">
                        <div id="miyazaki">
                            <p>宮崎</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 46 ]) }}">
                        <div id="kagoshima">
                            <p>鹿児島</p>
                        </div>
                    </a>
                    <a href="{{ route('posts.index', [ 'prefectures_id' => 47 ]) }}">
                        <div id="okinawa">
                            <p>沖縄</p>
                        </div>
                    </a>
                </div>
            </div>
        </div> <!-- japan-map -->
    </div>
</div>
@endsection