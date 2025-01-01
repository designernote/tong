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
    <!-- header NO -->
    <main role="main">
      <div class="container map_page">
        <section>
          <div class="map_search">
            <button class="back">
              <a href="index.php">back</a></button>
            <div class="input_wrap search">
              <input type="text" placeholder="" value="부동산" />
            </div>
          </div>

          <ul class="location_capsule">
            <li>부동산</li>
            <li>인테리어</li>
            <li>줄눈</li>
            <li>가전</li>
            <li>가구</li>
            <li>오피스</li>
          </ul>
          <button class="floating_btn"></button>
          <div class="mapBG">
            <!-- 위치 임의 지정 -->
            <button class="currentLocation" style="position: absolute; top:405px; left:175px;">
            </button>
            <div class="pointLocation" style="position: absolute; top:215px; left:100px;">
              <p class="food">프라이머커피</p>
            </div>
            <div class="pointLocation" style="position: absolute; top:235px; left:300px;">
              <p class="food">명륜진사갈비</p>
            </div>
            <div class="pointLocation" style="position: absolute; top:275px; left:40px;">
              <p class="food">24시감자탕</p>
            </div>
            <div class="pointLocation" style="position: absolute; top:274px; left:205px;">
              <p class="food">스시앤스시</p>
            </div>
            <div class="pointLocation" style="position: absolute; top:335px; left:130px;">
              <p class="food">수하담</p>
            </div>
            <div class="pointLocation" style="position: absolute; top:415px; left:230px;">
              <p class="food">사조참치</p>
            </div>
          </div>
        </section>
      </div>
    </main>
    <?php
// footer.php 파일 포함
include 'include/footer.php';
?>