$(document).ready(function () {
  // 사이드메뉴 펼치기기
  $(".btn_sideMenu").click(function (e) {
    $(".sideMenu").addClass("open");
    $(".gnb_bg").fadeIn(750);
    $("body").css("overflow", "hidden");
    e.preventDefault();
  });

  // 사이드메뉴 닫기기
  $(".side_close, .gnb_bg").click(function (e) {
    $(".sideMenu").addClass("out").removeClass("open");
    $(".gnb_bg").fadeOut(750);
    $("body").css("overflow", "initial");
    e.preventDefault();
  });

  // 하단 탭 네비게이션
  $(".menu").click(function (e) {
    e.preventDefault();

    let tabMenu = $(this);

    $(".menu").removeClass("on");
    $(this).addClass("on");
  });
});
