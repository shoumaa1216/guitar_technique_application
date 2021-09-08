<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ギターテクニック擬音一覧ページ</title>
</head>
<body>
<p class="explanation">{{ $techniques }}に対する擬音を表示します。</p>
 <div class='onomatopoeias'>
    @foreach ($onomatopoeia_name as $onomatopoeia)
        <h2 class='onomatopoeia_name'>{{ $onomatopoeia->name }}</h2>
    @endforeach 
 </div>
 <div class="footer">
    <a href="/list">戻る</a>
 </div>
</body>
</html>