<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ギターテクニック擬音一覧ページ</title>
</head>
<body>
 <h1 class="title">ギターテクニック一覧</h1>
 <p class="explanation">この中からギターテクニックを選んでください。</p>
 <div class='techniques'>
    @foreach ($techniques as $technique)
        <h2 class='technique_name'><a href="/list/{{ $technique->id }}">{{ $technique->name }}</a></h2>
    @endforeach 
 </div>
 <div class="footer">
            <a href="/">戻る</a>
 </div>
</body>
</html>