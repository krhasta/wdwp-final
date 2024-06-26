<?php
include_once ('constants.php');

# 공통 head
print ('
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>' . SITE_NAME . '</title>
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/basic.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./public/css/firework.css">
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./public/css/bootstrap-carousel.css" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/@kfonts/bm-euljiro@0.2.1/index.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon-0.png?" type="image/x-icon">
    <link rel="icon" id="favicon" href="/favicon.ico?" type="image/x-icon">
    <script>
      var faviconRoute = "/wdwp-final/favicons/";
      var faviconNames = ["favicon-0.png", "favicon-1.png", "favicon-2.png", "favicon-3.png", "favicon-4.png",
                      "favicon-5.png", "favicon-6.png", "favicon-7.png"];
  
      var idx = 0;
  
      setInterval(func, 300);
  
      function func() {
          document.querySelector("#favicon").setAttribute("href", faviconRoute + faviconNames[idx++]);
          idx %= faviconNames.length;
      }
  </script>
</head>
');
?>