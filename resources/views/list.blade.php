@extends('layouts.app')
@section('title')

    <title>ギターテクニック擬音一覧ページ</title>
@endsection
@section('link')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style-list.css') }}">
@endsection
@section('content') 
<div class="list">
<div class="list-contnt">
 <h1 class="title">ギターテクニック一覧</h1>
 <p class="explanation">この中からギターテクニックを選んでください。</p>
 <div class='techniques'>
    @foreach ($techniques as $technique)
        <h2 class='technique_name'><a href="/list/{{ $technique->id }}">{{ $technique->name }}</a></h2>
    @endforeach 
 </div>
 <div class="footer">
            <a href="/">戻る</a>
 </div>
 </div>
 </div>
 @endsection
