<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ギターテクニック擬音検索</title>
    <link rel="stylesheet" href="style-index.css">
</head>
<body>
 <h1 class="title">ギターテクニック擬音検索</h1>
 <p class="explanation">このサイトはギターの擬音を入力することで、ギターのテクニックを検索することができます。下のフォームに擬音を入力してください。(例:チュイーン、ギュオーン)</p> 
 <form action="result" method="POST" class="result_form">
     {{ csrf_field() }}
     <div class="result_form">
      <input type="text" name="onomatopoeia[name]" id="text">
      <input type="submit" value="検索">
      </div>
  </form>
 <form action="register" method="get" class="register_form">
      {{ csrf_field() }}
      <div class="register_form">
       <input type="submit" value="擬音登録ページ">   
      </div>
 </form>
</body>
</html>