@extends('layouts.app')
@section('title')
   <title>ギターテクニック擬音検索結果</title>
@endsection
@section('link')
   <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style-result.css') }}" >
@endsection
@section('content') 
<div class="result">
    <div class="result-content">
   <h1 class='explanation'>{{ $input_name }}という擬音は{{ $technique_name }}です！</h1>
   <div class="box">
   <p class='explanation2'>{{ $technique_name }}は{{ $explanation }}です！</p>
   </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
    </div>
    </div>
@endsection