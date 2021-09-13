<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ギターテクニック擬音登録ページ</title>
    <link rel="stylesheet" href="style-register.css">
</head>
<body>
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
    <a href="/register">戻る</a>
 </div>
</body>
</html>