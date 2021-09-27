@extends('layouts.app')
@section('title')
    <title>ギターテクニック擬音登録ページ</title>
    @endsection
    @section('link')
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style-register.css') }}">
@endsection
@section('content')
<div class="registers">
    <div class="registers-content">
 <h1 class="title">ギターテクニック擬音登録</h1>
 <p class="explanation">この中からギターテクニックを選びフォームから擬音を入力して登録してください。</p>
 <div class='techniques'>
    @foreach ($techniques as $technique)
        <h2 class='technique_name'><a href="/registers/{{ $technique->id }}">{{ $technique->name }}</a></h2>
    @endforeach 
 </div>
 </div>
 <div class="footer">
            <a href="/">戻る</a>
 </div>
 </div>
 @endsection
