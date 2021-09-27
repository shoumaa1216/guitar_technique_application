    @extends('layouts.app')
    @section('title')
    <title>検索失敗</title>
    @endsection
    @section('link')
    <link rel="stylesheet" type="text/css"  href="{{ secure_asset('/css/style-failure.css') }}" >
    @endsection
   @section('content') 
   <div class="failure">
       <div class="failure-content">
   <p class="explanation">{{ $input }}という擬音に対するテクニックは見つかりませんでした。<br>この中に目当てのテクニックはありますか？</p>
   <p class="technique"> 
   @foreach ($techniques as $technique)
        <h2 class='technique_name'><a href="/list/{{ $technique->id }}">{{ $technique->name }}</a></h2>
    @endforeach </p> 
     <a href="/">戻る</a>
     </div>
     </div>
     @endsection