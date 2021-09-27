@extends('layouts.app')
@section('title')
    
    <title>ギターテクニック擬音登録ページ</title>
@endsection
@section('link')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style-post.css') }}">
@endsection
@section('content')
<div class="post">
    <div class="post-content">
<p class="explanation">{{ $technique_name }}に対する擬音を入力して送信してください</p>
<p class="list">{{ $technique_name }}の擬音一覧です</p>
 @foreach ($onomatopoeias as $onomatopoeia)
        <p class='onoamatopoeias'>{{ $onomatopoeia->name }}</p>
    @endforeach 
<form action="/posts" method="POST">
            @csrf
            <div class="onomatopoeia">
                <input type="text" name="onomatopoeia[name]" />
            </div>
            <input type="hidden" name="onomatopoeia[technique_id]" value="{{ $technique_id }}">
            <input type="submit" value="送信"/>
            </form>
 <div class="footer">
    <a href="/registers">戻る</a>
 </div>
 </div>
 </div>
@endsection