@extends('layout')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection
@section('content')
<div class="home-container">

    <div class="sp-container">
        <!-- ヘッダー -->
        @component('components.header')
        @endcomponent
        <!-- リスト -->
        <div class="content">
            <ul>
                <li>
                    <div class="list-marker">
                        1
                    </div>
                    <div class="list-content">
                        <div class="main-content"></div>
                        <div class="sub-content"></div>
                    </div>
                    <div class="deadline-ymd"></div>
                </li>
            </ul>
        </div>
        <!-- フッターメニューバー -->
        <div class="footer-menu">

        </div>
        <!-- 右下追加ボタン -->
        <div class="fix-addbtn">

        </div>
    </div>
</div>
@endsection