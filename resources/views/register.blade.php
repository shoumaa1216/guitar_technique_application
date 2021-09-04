<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ギターテクニック擬音登録ページ</title>
    <link rel="stylesheet" href="style-register.css">
</head>
<body>
 <h1 class="title">ギターテクニック擬音登録</h1>
 <p class="explanation">この中からギターテクニックを選びフォームから擬音を入力して登録してください。</p>
 <div class='techniques'>
    @foreach ($techniques as $technique)
        <h2 class='technique_name'>{{ $technique->name }}</h2>
    @endforeach 
 </div>
</body>
</html>