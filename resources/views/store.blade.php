@extends('layouts.app')
@section('title')
 <title>登録成功</title>
@endsection
@section('link')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style-store.css') }}">
@endsection
@section('content') 
<div class="store">
    <div class="store-content">
   <p class='body'>入力された擬音の登録ができました。</p>
   <div class="footer">
        <a href="/">トップページへ戻る</a>
    </div>
    </div>
    </div>
@endsection
