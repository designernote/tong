<html lang="ko">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1, maximum-scale=1" />
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/swiper.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <section class="wrap">
    <header class="header">
      <h1 class="back"><a href="index.php">back</a></h1>
      <h2 class="page_title"></h2>
      <!-- <a href="#" class="btn_sideMenu">메뉴</a> -->
    </header>
    <main role="main">
      <div class="container">
        <section>
          <div class="detail_view">
            <div class="img_container">
              <img src="./assets/images/ex_img3.png" class="thumb_img3" alt="">
            </div>
            <p>금나와라공인중계사<small>부동산</small></p>
            <span>AI혜택 점수 <em>4.8</em></span>
          </div>
          <ul class="user_act">
            <li>전화</li>
            <li>찜하기</li>
            <li>공유</li>
          </ul>
          <div class="bar"></div>
          <div class="place_info">
            <ul>
              <li>
                <div>경기 성남시 분당구 판교역로 192번길 14-2 골드타워 2층 도원참치</div>
              </li>
              <li>영업시작 오전 10:00 ~ 오후 7:00</li>
              <li>031-000-0000</li>
              <li>https://www.dowontuna.com/</li>
            </ul>
          </div>
          <div class="bar"></div>
          <div class="benefit">
            <div class="title">
              <p>혜택</p>
            </div>
            <form>
              <label for="benefit1">혜택1</label>
              <div class="input_wrap benefit_input">
                <input type="text" name="benefit1" id="" placeholder="이사지원금 최대 50만원 지원">
              </div>
              <label for="benefit2">혜택2</label>
              <div class="input_wrap benefit_input">
                <input type="text" name="benefit2" id="" placeholder="집들이 화장지 1세트 증정">
              </div>
            </form>
          </div>
        </section>
      </div>
    </main>
    <?php
// footer.php 파일 포함
include 'include/footer.php';
?>