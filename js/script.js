$(function(){
  console.log('このファイルを読み込んでいます');

  // Ajax
  $('.btn').click(function() {
    $('#result').load('more.html');
    // ここに書くとloadで読み込まれるが、帰ってくる前に下の実行が処理されてしまうので赤字にならない
    $('#message').css('color','red');
  });

  $('#lesson18').click(function() {
    $('#result18').load('more.html',function() {
      $('#message18').css('color','blue');
    });

  });

  $('#greet').click(function() {
    // $.get('', {}, function() {});
    $.get('greet.php', {
      name: $('#name').val(),
    }, function(data) { //greet.phpから返ってきた値をdataに格納している
      $('#greetResult').html(data);
    });
  });

  $('#greet2').click(function() {
    $.post('greet.php', {
      name: $('#name').val(),
    }, function(data) {
      $('#greetResult').html(data);
    });
  });



  $('#likeSubmit').click(function() {
    $.post('like.php', {
      like: $('#like').val(),
    }, function(data) {
      $('#submitResult').html(data.message + 'が好きなんですね！<br>(' + data.length + '文字ですね)');
    });
  });




});