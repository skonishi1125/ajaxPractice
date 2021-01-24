<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cssセレクタ</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <!-- 常に最新のファイルを更新するようにする -->
  <link rel="stylesheet" href="../css/stylesheet.css?<?= filemtime('../css/stylesheet.css'); ?>">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <h1 id="title">見出しh1</h1>
  <!-- id="title info"など複数指定はできない -->
  <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。</p>

  <ul>
    <li><a href="aaa.com" target="_blank">aaa</a></li>
    <li><a href="https://bbb.com" target="_blank">https://bbb.com</a></li>
    <li><a href="ccc.com" >ccc</a></li>
    <li><a href="https://liko.link">https://liko.link</a></li>
  </ul>

  <section>
    <h1 class="title">Title</h1>
    <p>こんにちは！</p>
    <p>こんにちは！</p>
    <p>こんにちは！</p>
    <p>こんにちは！</p>
    <p>こんにちは！</p>
  </section>

  <h1 data-subtitle="- Main Title">見出し1</h1>
  <p>こんばんはこんばんはこんばんはこんばんはこんばんは</p>
  <h2 data-subtitle="- Sub Title">見出し２</h2>
  <p>おやすみおやすみおやすみおやすみおやすみ</p>





  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/script.js?<?= filemtime('../js/script.js'); ?>"></script>
</body>
</html>