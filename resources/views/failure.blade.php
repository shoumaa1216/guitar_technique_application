<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索失敗</title>
    <link rel="stylesheet" href="style-failure.css">
</head>
<body>
   <p class="failure">{{ $input }}という擬音に対するテクニックは見つかりませんでした。<br>この中に目当てのテクニックはありますか？</p>
   <p class="technique"> 
   @foreach ($techniques as $technique)
        <h2 class='technique_name'><a href="/list/{{ $technique->id }}">{{ $technique->name }}</a></h2>
    @endforeach </p> 
     <a href="/">戻る</a>
</body>
</html>