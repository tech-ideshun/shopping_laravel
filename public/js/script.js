$(function(){
  $("[name='image']").on('change', function (e) {
    
    var reader = new FileReader();
    
    reader.onload = function (e) {
        $("#preview").attr('src', e.target.result);
    }
    $('#default').hide();
    reader.readAsDataURL(e.target.files[0]);   

  });
});


$(function() {
  'use strict';

  $(function() {
    $('.flash_message').fadeOut(3000);
  });
});

// 

$('.slider').slick({
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 3,//スライドを画面に3枚見せる
  slidesToScroll: 3,//1回のスクロールで3枚の写真を移動して見せる
  prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
  dots: true,//下部ドットナビゲーションの表示
  responsive: [
    {
    breakpoint: 769,//モニターの横幅が769px以下の見せ方
    settings: {
      slidesToShow: 2,//スライドを画面に2枚見せる
      slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
    }
  },
  {
    breakpoint: 426,//モニターの横幅が426px以下の見せ方
    settings: {
      slidesToShow: 1,//スライドを画面に1枚見せる
      slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
    }
  }
]
});


// $(function() {
// 	/* 「同意する」チェックイベント */
// 	$('[type="checkbox"]').on('click', function(){
// 		if($('[type="checkbox"]').prop("checked")){
// 			$('[type="submit"]').css('background-color', 'rgb(51, 51, 255)');
// 		} else {
// 			$('[type="submit"]').css('background-color', 'rgb(102, 102, 102)');
// 		}
// 	});

// 	/* 「同意する」がチェックされていない場合submit=false */
// 	$('[type="submit"]').on('click', function(){
// 		if ($('[type="submit"]').css('background-color') == 'rgb(102, 102, 102)') {
// 			return false;
// 		}
// 	});
// });

$(function() {
  $('#submit').prop('disabled', true);

  $('#agree').on('click', function() {
      if ($(this).prop('checked') == false) {
          $('#submit').prop('disabled', true);
      } else {
          $('#submit').prop('disabled', false);
      }
  });
});