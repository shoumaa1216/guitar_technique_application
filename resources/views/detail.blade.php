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
<p class="explanation">現時点でこのサイトに登録されている{{ $technique_name }}に対する擬音を表示します。</p>
 <div class='onomatopoeias'>
    @foreach ($onomatopoeias as $onomatopoeia)
        <h2 class='onomatopoeias'>{{ $onomatopoeia->name }}</h2>
    @endforeach 
 </div>
 <p class='explanation2'>{{ $technique_name }}は{{ $explanation }}です！</p>
 <p class='explanation3'>解説動画</p>
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
 <div class="footer">
    <a href="/list">戻る</a>
 </div>
 </div>
 </div>
@endsection