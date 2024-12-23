$(document).ready(function () {
  // 사이드메뉴 펼치기기
  $(".btn_sideMenu").on("click", function () {
    $(".sideMenu").toggleClass("open");
    $(".gnb").toggleClass("open");
  });

  // 햄버거메뉴 애니메이션션
  var burger = $(".btn_sideMenu");

  burger.each(function (index) {
    var $this = $(this);

    $this.on("click", function (e) {
      e.preventDefault();
      $(this).toggleClass("active-" + (index + 1));
    });
  });
});
