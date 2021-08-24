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
 <form action="result.html" method="get" class="form">
    <div class="form">
      <input type="text" name="text" id="text">
      <input type="submit" value="検索">
    </div>
  </form>
  <h2>ギターのテクニック擬音登録</h2>
  <p>ギターのテクニックの擬音を登録できます。ギターを知っている方登録お願いします。</p>
  <form action="result.html" method="get" class="form">
    <input type="text" name="title" placeholder="ギターのテクニック"/><br>

    <textarea name="message" placeholder="ギターの擬音"></textarea><br>
    <input type="submit" value="登録"/>
    </div>
  </form>
</body>
</html>