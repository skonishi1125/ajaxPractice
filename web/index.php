<?php
  require('../app/dbconnect.php');
  $id = 1;

  //いいね初期値
  $deflikes = $db->prepare('SELECT number FROM goods WHERE id=?');
  $deflikes->execute( array($id) );
  $deflike = $deflikes->fetch();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajax基礎</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>ajaxの練習です。</h3>
        <button class="btn btn-primary">もっと読む</button>
        <div id="result"></div>
      </div>

      <div class="col-md-12">
        <br>
        <p>レッスン18の説明</p>
        <button id="lesson18">ボタン</button>
        <div id="result18"></div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <input type="text" name="name" id="name">
        <br>
        <input type="button" value="GETで送る!" id="greet">
        <input type="button" value="POSTで送る!" id="greet2">
      </div>
      <div claas="col-md-6" id="greetResult"></div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <p>好きなものは？</p>
        <input type="text" name="like" id="like">
        <input type="button" value="提出する" id="likeSubmit">
      </div>
      <div claas="col-md-6" id="submitResult"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <p>
          ※ID = テーブルはlikeだけどこっちのIDはgoodです！間違えないで<br>
          ボタンを押すとDBの値が増えます<br>
        </p>
        <button class="btn btn-outline-danger btn-sm" id="good" data-goodcount="10" data-testword="javascriptに送るサンプルワードです">good!</button>

        <p>現在の値は""<span id="goodNumberSpace"><?= $deflike['number']; ?></span>""です。</p>

      </div>
    </div>


  </div>

  <!-- メインのフッター -->
  <!-- slimはajaxとanimateが非サポート -->
  <script src="../js/jquery-3.5.1.min.js"></script>
  <!-- jQuery UI(P37, P62) animateで色を変化させたりする場合に必要 -->
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>