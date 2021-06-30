'use strict';

// ボタンの開閉
$(function() {
    $('.btn-menu').click(function() {
        $(this).toggleClass('active');

        if($(this).hasClass('active')) {
            $('.menu').addClass('active');
        } else {
            $('.menu').removeClass('active');
        }
    });
});


// 一文字ずつタイピング
ityped.init('#title2', {
    strings: ['welcome to my '],
    typeSpeed: 150,
    backSpeed:  50,
    startDelay: 800,
    backDelay:  800,
    loop: false,
    showCursor: true,
    onFinished: function(){
        console.log("loop:falseの時のみ")
    },
});

ityped.init('#title', {
  strings: ['portfolio'],
  typeSpeed: 150,
  backSpeed:  50,
  startDelay: 3000,
  backDelay:  800,
  loop: false,
  showCursor: true,
  onFinished: function(){
    console.log("loop:falseの時のみ")
  },
});





// 高さを画面幅に合わせる(タイトル部分と製作実績の部分のみ)
$(function(){
    // var nH = $('header').innerHeight();// ナビの高さを取得
  
    var wH = $(window).height();// 表示画面の高さを取得
  
    var hH = wH;// 表示画面とナビエリアの差分を算出
  
    $('.title').css('height', hH + 'px');// 算出した差分をヘッダーエリアの高さに指定
});


