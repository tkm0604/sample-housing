jQuery(function($) {

// -----------------------------------
// デバイスで条件分岐
// -----------------------------------
$(function(){
	var ua = window.navigator.userAgent.toLowerCase();
	if(ua.indexOf('iPhone') > 0) {
		//iPhoneの時の処理
		$("meta[name='viewport']").attr("content", "width=device-width,initial-scale=1");
	} else if(ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
		//Android（モバイル）の時の処理
		$("meta[name='viewport']").attr("content", "width=device-width,initial-scale=1");
	} else if(ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document || ua.indexOf('Android') > -1) {
		//iPadとAndroidの時の処理
		$("meta[name='viewport']").attr("content", "width=1280");
	} else {
		//その他PCの処理
		$("meta[name='viewport']").attr("content", "width=device-width,initial-scale=1");
	}
});



// -----------------------------------
// slick設定
// -----------------------------------

$('.slick01').slick({
  autoplay: true,
  infinite: true,
  dots: false,
  arrows: false,
  centerMode: true,
  slidesToShow: 2, // 画像が4枚表示されるようにする
  variableWidth: false,
  centerPadding: '10.2%', // 中央のスライドの両側が25%見えるようにする
  responsive: [
      {
          breakpoint: 767,
          settings: {
              centerPadding: '5.2%', // 中央のスライドの両側が少し見えるようにする
              // centerPadding: '30px', // 中央のスライドの両側が少し見えるようにする
              slidesToShow: 2, // 画像が2枚表示されるようにする
              variableWidth: false
          }
      }
  ]
});



// -----------------------------------
// スムーズスクロール
// -----------------------------------

// ページ内のスムーススクロール
$(function () {
  $('a[href*="#"]').click(function (e) {
    var target = $(this.hash === "" ? "html" : this.hash);
    if (target.length) {
      e.preventDefault();
      var headerHeight = $("header").outerHeight();
      
      // スクロール位置調整用の変数
      var hash = this.hash;

      // 条件に基づいてスクロール位置の調整
      if (hash === "#greeting") {
        headerHeight = 150; // 'ご挨拶'リンクの場合
      } 

      var position = target.offset().top - headerHeight - 80;
      $("html, body").animate({ scrollTop: position }, 500, "swing");

      if (!target.is("html")) {
        // URLにハッシュを含める
        history.pushState(null, '', this.hash);
      }
    }
  });
});

// 別ページ遷移後のスムーススクロール
var urlHash = location.hash;
if (urlHash) {
  var target = $(urlHash);
  if (target.length) {
    // ページトップから開始（ブラウザ差異を考慮して併用）
    history.replaceState(null, '', window.location.pathname);
    $("html,body").stop().scrollTop(0);

    $(window).on("load", function () {
      var headerHeight = $("header").outerHeight();


      // 条件に基づいてスクロール位置の調整
      if (urlHash === "#greeting") {
        headerHeight = 150; // 'ご挨拶'リンクの場合
      } 

      var position = target.offset().top - headerHeight - 80;
      $("html, body").animate({ scrollTop: position }, 500, "swing");

      // ハッシュを再設定
      history.replaceState(null, '', window.location.pathname + urlHash);
    });
  }
}



// -----------------------------------
// フェードイン
// -----------------------------------

  $(document).ready(function(){
    // ページにアクセスしたら要素をフェードアップ
    setTimeout(function(){
     $('.fade-in-item').addClass('fade-in-up');
    },500);
    setTimeout(function(){
      $('.fade-in-item2').addClass('fade-in-up');
    },1000);
    setTimeout(function(){
      $('.fade-in-item3').addClass('fade-in-up');
    },1500);
});

// -----------------------------------
// フェードアップ
// -----------------------------------

$(document).ready(function(){
  function checkVisibility() {
    $('.fade-up-item').each(function() {
      if ($(this).offset().top < $(window).scrollTop() + $(window).height()) {
        $(this).addClass('fade-up');
      }
    });
  }

  // ページ読み込み時にチェック
  checkVisibility();

  // スクロールイベントでチェック
  $(window).on('scroll', function() {
    checkVisibility();
  });

});


$(document).scroll(function() {
  $('.scroll-fade-up').each(function() {
    var scrollTop = $(window).scrollTop();
    var elementTop = $(this).offset().top;
    var windowHeight = $(window).height();

    if (elementTop < scrollTop + windowHeight) {
      $(this).addClass('fade-up');
    }
  });
});

// -----------------------------------
// サイドバー year-toggleクリック処理
// -----------------------------------
$(document).ready(function() {
  $('.year-toggle').on('click', function() {
      $(this).toggleClass('open');
      $(this).next('.month-list').slideToggle().css('padding-bottom', '10px');;
  });
});



});

// -----------------------------------
// ハンバーガーメニュー
// -----------------------------------
jQuery(document).ready(function($) {
  console.log("jQuery loaded and document is ready");

  // burgerボタンがクリックされたときにis-openクラスをトグルする
  $(document).on("click", "#burger", function() {
      console.log("Burger button clicked");
      $('.header-right').toggleClass('is-open');
  });

  // ナビゲーションリンクがクリックされたときにis-openクラスを外す
  $(document).on("click", ".g-nav-item__link", function() {
      console.log("Nav link clicked");
      $('.header-right').removeClass('is-open');
  });

  function checkWindowSize() {
      if ($(window).width() >= 991) {
          $('.header-right').removeClass('is-open');
      }
  }

  checkWindowSize();
  $(window).on('resize', checkWindowSize);
});