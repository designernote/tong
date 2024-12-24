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
    <div style="display: flex;">
        <div><ul>
        <li><a href="#" onclick="loadIframe('index.php')">메인 페이지</a></li>
        <li><a href="#" onclick="loadIframe('sub1.php')">서브 페이지 1</a></li>
        <li><a href="#" onclick="loadIframe('company.php')">회사 페이지</a></li>
    </ul></div>
        <div>

        </div>
        <iframe id="content" src="" width="600" height="400" style="border:1px solid black;"></iframe>

    </div>
    <script>
        function loadIframe(page) {
            document.getElementById('content').src = page;
        }
    </script>

</body>
</html>