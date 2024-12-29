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
      <h1 class="back"><a href="index.html">back</a></h1>
      <!-- <h2 class="page_title">부동산</h2> -->
      <a href="#" class="btn_option"></a>
    </header>
    <main role="main">
      <div class="container">
        <section>
          <div class="store_detail">
            <form>
              <label for="type">업종</label>
              <div class="input_wrap detail_input">
                <input type="text" name="type" id="" placeholder="부동산">
              </div>
              <label for="type_name">업종명<span><em>5</em> / 30자</span></label>
              <div class="input_wrap detail_input">
                <input type="text" name="type_name" id="" placeholder="금나와라 부동산">
              </div>
              <label for="introduce">대표번호</label>
              <div class="input_wrap detail_input">
                <input type="text" name="introduce" id="" placeholder="010-000-0000">
              </div>
              <label for="introduce">한 줄 소개<span><em>3</em> / 100자</span></label>
              <div class="detail_input">
                <textarea type="text" name="introduce" id="" placeholder="금나와라 부동산"></textarea>
              </div>
              <div class="flex_right">
                <button class="button">AI 생성하기</button>
              </div>
            </form>

            <form>
              <label for="type">주소</label>
              <div class="input_wrap detail_input">
                <input type="text" name="type" id="" placeholder="건물, 지번 또는 도로명 검색">
              </div>
              <div class="input_wrap detail_input">
                <input type="text" name="type" id="" placeholder="상세주소">
              </div>
              <label for="type_name">Web Page</label>
              <div class="input_wrap detail_input">
                <input type="text" name="type_name" id="" placeholder="www.aaa.kr">
              </div>
              <label for="introduce">아파트단지명</label>
              <div class="input_wrap detail_input">
                <input type="text" name="introduce" id="" placeholder="강남퍼스트파크아파트">
              </div>
            </form>
            <form>
              <label for="benefit1">혜택1</label>
              <div class="input_wrap benefit_input">
                <input type="text" name="benefit1" id="" placeholder="10% 할인">
              </div>
              <label for="benefit2">혜택2</label>
              <div class="input_wrap benefit_input">
                <input type="text" name="benefit2" id="" placeholder="10만원 상당의 사은품 증정">
              </div>
            </form>
          </div>
          <button class="button">나의 점포 생성하기</button>
        </section>
      </div>
    </main>
    <?php
// footer.php 파일 포함
include 'include/footer.php';
?>