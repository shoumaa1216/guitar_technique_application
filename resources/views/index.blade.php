@extends('layouts.app')
@section('title')
   <title>ギターテクニック擬音検索</title>
@endsection
@section('link')
   <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style-index.css') }}" >
@endsection
@section('content') 
<div class="index">
 <div class="index-content">
 <h1 class="title">ギターテクニック擬音検索</h1>
 <p class="explanation">このサイトはギターの擬音を入力することで、ギターのテクニックを検索することができます。<br>下のフォームに擬音をカタカナで入力してください。(例:チュイーン、ギュオーン)</p> 
 <form action="result" method="POST" class="result_form">
     {{ csrf_field() }}
     <div class="result_form">
      <input type="text" name="onomatopoeia[name]" id="text">
      <p class="name__error" style="color:red">{{ $errors->first('onomatopoeia.name') }}</p>
      <input type="submit" value="検索" id="submit">
      </div>
  </form>
  @auth
 <form action="registers" method="get" class="register_form">
      {{ csrf_field() }}
      <div class="register_form">
       <input type="submit" value="擬音登録ページ">   
      </div>
 </form>
 @endauth
 @guest
 <p class="explanation2">擬音登録には会員登録が必要です。上のバーから会員登録およびログインを行うと擬音の登録ができるようになります。</p>
 @endguest
 <form action="list" method="get" class="list_form">
      {{ csrf_field() }}
      <div class="list_form">
       <input type="submit" value="擬音一覧ページ">   
      </div>
 </form>
 </div>
 </div>
@endsection

