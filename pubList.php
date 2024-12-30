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
    <div style="display: flex; width: 100%; ">
        <div style="width: 20%; "><ul>
        <li><a href="#" onclick="loadIframe('index.php')">메인 페이지</a></li>
        <li><a href="#" onclick="loadIframe('map.php')">지도</a></li>
        <li><a href="#" onclick="loadIframe('myPage.php')">마이페이지</a></li>
        <li><a href="#" onclick="loadIframe('profile01.php')">프로필01</a></li>
        <li><a href="#" onclick="loadIframe('profile02.php')">프로필02</a></li>
        <li><a href="#" onclick="loadIframe('profile03.php')">프로필03</a></li>
        <li><a href="#" onclick="loadIframe('splash.php')">스플래쉬</a></li>
        <li><a href="#" onclick="loadIframe('storeDetail.php')">부동산소개</a></li>
    </ul></div>
        <div style="width: 100%; height: 100%; ">
        <iframe id="content" src="" width="100%" height="100%" style="border:1px solid black;"></iframe>

        </div>
       
    </div>
    <script>
        function loadIframe(page) {
            document.getElementById('content').src = page;
        }
    </script>

</body>
</html>