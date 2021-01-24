$(function(){
  console.log('このファイルを読み込んでいます');

  // Ajax
  // $('.btn').click(function() {
  //   $('#result').load('more.html');
  //   // ここに書くとloadで読み込まれるが、帰ってくる前に下の実行が処理されてしまうので赤字にならない
  //   $('#message').css('color','red');
  // });

  // $('#lesson18').click(function() {
  //   $('#result18').load('more.html',function() {
  //     $('#message18').css('color','blue');
  //   });

  // });

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

$(function() {
  console.log('2つ目のスコープ。');

  // HTMLで表示した値を読み込むことができる
  var goodcount = $('#good').data('goodcount');
  var testword = $('#good').data('testword');

  // 型を調べる
  console.log(typeof(goodcount));
  console.log(typeof(testword));

  // 値を調べる
  console.log(goodcount + ', ' + testword);

  
  $('#good').click(function () {
    $.post('changeTableTest.php', {
      number: goodcount,
    }, function(data) {
      $('#goodNumberSpace').html(data);
    });
  })

});

$(function() {
  // thisでのボタン識別テスト

  $('.count-btn').click(function() {
    // li指定 今回は使わない
    const parentLi = $(this).parent();

    // pを指定(button要素の次)
    const nextP = $(this).next('p');

    // pのdata-numberを取得
    const number = $(nextP).data('number');

    // pの中のspanを指定
    const spanInP = $(nextP).find('span');

    console.dir('button要素の次の値(nextP) : ' + nextP);
    console.dir(nextP);
    console.dir('pの中のspanの値(spanInP) : ' + spanInP);
    console.dir(spanInP);
    console.dir('pのdata-number : ' + number);
    console.dir(number);
    console.log('-----------');


    $.get('countBtn.php', {
      id: number,
    }, function(data) {
      $(spanInP).html(data);
    });

  });


});