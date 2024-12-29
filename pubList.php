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
  <style>
  ul {
    width: 200px;
  }

  ul li {
    padding-top: 30px;
    height: 30px;
    text-align: center;
  }

  iframe {
    border: 1px solid black;
  }
  </style>
</head>

<body>
  <div class="flex">
    <ul>
      <li><a href="#" onclick="loadIframe('index.php')">메인 페이지</a></li>
      <li><a href="#" onclick="loadIframe('splash.php')">스플레시 페이지</a></li>
      <li><a href="#" onclick="loadIframe('categorySelect.php')">카테고리 선택시</a></li>
      <li><a href="#" onclick="loadIframe('storeDetail.php')">점포상세</a></li>
      <li><a href="#" onclick="loadIframe('map.php')">지도-검색결과</a></li>
      <li><a href="#" onclick="loadIframe('category.php')">카테고리</a></li>
      <li><a href="#" onclick="loadIframe('myPage.php')">마이페이지</a></li>
      <li><a href="#" onclick="loadIframe('loginPage.php')">마이페이지 로그인</a></li>
      <li><a href="#" onclick="loadIframe('profile01.php')">프로필1</a></li>
      <li><a href="#" onclick="loadIframe('profile02.php')">프로필2</a></li>
      <li><a href="#" onclick="loadIframe('profile03.php')">프로필3</a></li>
      <li><a href="#" onclick="loadIframe('storeDetailInput.php')">점포상세입력</a></li>
    </ul>
    <iframe id="content" src="./index.php" width="390" height="844"></iframe>
  </div>
  <script>
  function loadIframe(page) {
    document.getElementById('content').src = page;
  }
  </script>
</body>

</html>