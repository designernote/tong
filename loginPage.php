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
      <!-- header NO -->
      <main role="main">
        <div class="container">
          <section>
            <div class="login_title_box">
              <div class="logo"></div>
              <p>입주에 필요한<br/>내주변 혜택경쟁</p>
            </div>
            <div class="social_area">
              <button class="button naver">네이버 로그인</button>
              <button class="button kakao">카카오로 3초만에 시작하기</button>
              <button class="button google">구글로 로그인</button>
            </div>

            <div class="login_area">
              <div class="bar_and">
                <span>또는</span>
              </div>
              <div class="btnBox_col">
                <button class="button btn_join">회원가입</button>
                <button class="button btn_email">이메일로 로그인</button>
              </div>
              <p>
              가입을 진행할 경우,
              <strong>이용약관</strong>과 
              <strong>개인정보 수집 및 이용</strong> 
              에 대해 동의한 것으로 간주됩니다.
              </p>
            </div>
          </section>
        </div>
      </main>
      <?php
// footer.php 파일 포함
include 'include/footer.php';
?>
