<html lang="ko">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1, maximum-scale=1" />
    <title></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/swiper.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <section class="wrap">
      <header class="header profile">
        <div class="avatar">
          <img src="./assets/images/ex_img4.png" alt="">
          <p>hong@gmail.com</p>
        </div>
        <a href="#" class="btn_setting">설정</a>
      </header>
      <main role="main">
        <div class="container">
          <section>
            <div class="toggle_bar">
              <p>광고주 전환하기</p>
              <input type="checkbox" id="toggle_slider"/>
              <label for="toggle_slider">on/off</label>
            </div>
            
            <button class="button">나의 점포 생성하기</button>
            
            <div class="title">
              <p>나의활동</p>
            </div>
            <ul class="my_list">
              <li>내 프로필</li>
            </ul>
            <div class="title">
              <p>기타</p>
            </div>
            <ul class="my_list">
              <li>공지사항</li>
              <li>자주 묻는 질문</li>
              <li>문의하기</li>
            </ul>

          </section>
        </div>
      </main>
      <?php
// footer.php 파일 포함
include 'include/footer.php';
?>
