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
 <p class="explanation2">ギターテクニックの動画です<br>自分の聞こえたように擬音を入力し、送信してください</p>
    <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '360',
          width: '640',
          videoId: '{{ $technique_url[0] }}',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
<p class="list">現時点で登録されている{{ $technique_name }}の擬音一覧です</p>
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