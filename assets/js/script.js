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

// 업종 셀랙트 //
let selectFlag;
$(".select_wrap").on("click", function (e) {
  e.preventDefault();
  $(this).toggleClass("selected");
  if ($(this).hasClass("selected")) {
    $(".type_selectList").show();
  } else {
    $(".type_selectList").hide();
  }
  $(".type_selectText").removeClass("placeholder");
});

$(".select_wrap").on("focusin", function () {
  $(".type_selectList").show();
});

$(".select_wrap").on("focusout", function () {
  if (!selectFlag) {
    $(".type_selectList").hide();
  }
  $(this).removeClass("selected");
});

$(".type_selectOption").on("mouseenter", function () {
  selectFlag = true;
});

$(".type_selectOption").on("mouseout", function () {
  selectFlag = false;
});

$(".type_selectOption").on("click", function () {
  let value = $(this).attr("value");

  $(".type_selectText").text($(this).text());
  $(".type_selectList").hide();
});
