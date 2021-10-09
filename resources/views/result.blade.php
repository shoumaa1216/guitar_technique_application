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
   <p class='explanation3'>解説動画</p>
   </div>
     <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
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
          videoId: '{{ $technique_url }}',
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
    <div class="footer">
        <a href="/">戻る</a>
    </div>
    </div>
    </div>
@endsection