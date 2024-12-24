$(document).ready(function () {
  // 사이드메뉴 펼치기기
  $(".btn_sideMenu").click(function () {
    $(".sideMenu").addClass("open");
    $(".gnb_bg").fadeIn(750);
  });

  $(".side_close").click(function () {
    $(".sideMenu").addClass("out").removeClass("open");
    $(".gnb_bg").fadeOut(750);
  });

  // 하단 탭 네비게이션
  $(".menu").click(function (e) {
    e.preventDefault();

    let tabMenu = $(this);

    $(".menu").removeClass("on");
    $(this).addClass("on");
  });
});
