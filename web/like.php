<?php
  // echoはjsonを返す場合、１回しか使ってはいけないのかも
  // echo "POST!" . $_POST["like"];

  // もらった$.postを値に入れる ここを書いてしまうと上の文章はechoされない
  $array = array(
    "message" => htmlspecialchars("hi! " . $_POST['like'], ENT_QUOTES, "utf-8"),
    "length" => mb_strlen($_POST['like']),
  );

  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($array);







?>