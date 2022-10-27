// 全体のfadeIn実装
$(function() {
  $(".container").fadeIn(2000);
  $(".title").fadeIn(2000);
  $(".scroll_icon").fadeIn(4000);
  $(".sub_title").fadeIn(4000);
  $(".contents").fadeIn(4000);
})

// TOPへ戻るボタンの実装
$(function() {
  var pagetop = $('.page_top');
  pagetop.hide();
  // 100px以上スクロールしたらTOPボタンを表示、それ以外の時は非表示
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  // TOPボタンをクリックしたら0.8秒かけてTOPへ戻る
  pagetop.click(function() {
    $("body, html").animate({
    scrollTop: 0 }, 800);
      return false;
  });
});
