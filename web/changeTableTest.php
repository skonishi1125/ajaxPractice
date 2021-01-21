<?php
  require('../app/dbconnect.php');
  $number = $_POST['number'];
  $id = 1;

  //いいね初期値
  $deflikes = $db->prepare('SELECT number FROM goods WHERE id=?');
  $deflikes->execute( array($id) );
  $deflike = $deflikes->fetch();
  $deflikeGood = $deflike['number'];

  //値を1増やす
  $addlikes = $db->prepare('UPDATE goods SET number=?, modified=NOW() WHERE id=?');
  $deflikeGood += 1;
  $addlikes->execute( array($deflikeGood, $id) );

  //いいね更新後の値
  $updlikes = $db->prepare('SELECT number FROM goods WHERE id=?');
  $updlikes->execute( array($id) );
  $updlike = $updlikes->fetch();
  $updGood = $updlike['number'];
  

  echo $updlike['number'];
  // echo $deflike['number'];

?>