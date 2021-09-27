@extends('layouts.app')
@section('title')

    <title>ギターテクニック擬音一覧ページ</title>
 @endsection
 @section('link')
 <link rel="stylesheet" type="text/css"  href="{{ secure_asset('/css/style-detail.css') }}" >
 @endsection
 @section('content') 
 <div class="detail">
     <div class="detail-content">
<p class="explanation">{{ $technique_name }}に対する擬音を表示します。</p>
 <div class='onomatopoeias'>
    @foreach ($onomatopoeias as $onomatopoeia)
        <h2 class='onomatopoeias'>{{ $onomatopoeia->name }}</h2>
    @endforeach 
 </div>
 <p class='explanation'>{{ $technique_name }}は{{ $explanation }}です！</p>
 <div class="footer">
    <a href="/list">戻る</a>
 </div>
 </div>
 </div>
@endsection