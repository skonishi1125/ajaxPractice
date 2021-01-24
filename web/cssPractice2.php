<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cssセレクタ2</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <!-- 常に最新のファイルを更新するようにする -->
  <link rel="stylesheet" href="../css/stylesheet.css?<?= filemtime('../css/stylesheet.css'); ?>">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>

  <p>こんにちは。1</p>
  <p>こんにちは。2</p>
  <p>こんにちは。3</p>
  <p>こんにちは。4</p>
  <p>こんにちは。5</p>
  <p>こんにちは。6</p>
  <p>こんにちは。7</p>
  <p>こんにちは。8</p>
  <p>こんにちは。9</p>
  <p>こんにちは。0</p>

  <hr>

  <section style="background-color: white;">
  <!-- 12番目の要素がsectionなのでnth-child(3n)に含まれているのだ -->
    <h1>見出し1</h1>
    <p>こんにちは。1</p>
    <p>こんにちは。2</p>
    <h2>見出し2</h2>
    <p>こんにちは。3</p>
    <p>こんにちは。4</p>
    <h2>見出し2</h2>
    <p>こんにちは。5</p>
    <h2>見出し2</h2>
    <p>こんにちは。6</p>
    <h2>見出し2</h2>
    <p>こんにちは。7</p>
    <p>こんにちは。8</p>
    <p>こんにちは。9</p>
    <p>こんにちは。0</p>
  </section>
  
  <ul>
    <li>項目</li>
    <li>項目</li>
    <li></li>
    <li> </li>
    <li><!-- コメント --></li>
    <li>項目</li>
  </ul>

  



  <!-- scriptもmainのchildに含まれるので,last-childを指定してもpの最後がなるわけではない -->
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/script.js?<?= filemtime('../js/script.js'); ?>"></script>
</body>
</html>