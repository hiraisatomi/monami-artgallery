<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>monami's room</title>
  <!-- description -->
  <meta name="description" content="webデザイナー/イラストレーター monamiのartgallery&work紹介のサイトです。">

  <!--twitter card-->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@monami283103" />
  <meta property="og:url" content="https://www.instagram.com/monami283103/?r=nametag" />
  <meta property="og:title" content="monamiのartgallery&work紹介サイト" />
  <meta property="og:description" content="デジタルイラストを作成しています。出展の情報なども随時記載しています。" />
  <meta property="og:image" content="https://www.monami-artgallery.net/images/angel.jpeg" />

  <link rel="icon" href="./images/top2.jpeg">
  <link rel="stylesheet" href="./css/style.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
   <!-- jQueryの読み込み -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- google adsense -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8020517822869630"
  crossorigin="anonymous"></script>
   <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DRE10HFZCQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DRE10HFZCQ');
  </script>
</head>
<body>
  <div class="container">

    <!-- ヘッダー使い回し -->
    <?php include('navbar.php'); ?>

    <div class="contents">
        <div class="content">
          <div class="aboutimg"><img class="about_img" src="./images/sepia_akazukin.jpeg" alt="赤ずきんの画像"></div>
          <div class="info_title">
            <h2 class="content_title">information</h2>
            <p class="sub_contenttitle">-出展予定などの情報をお知らせ致します-</p>
            <p class="content_text">最新情報はinstagramでもご確認いただけます</p>
            <div class="instabtn_area"><button class="instagram_btn"><a class="instagram_link" href="https://www.instagram.com/monami283103/?r=nametag" target="_blank" rel="noopener"><img class="instalogo" src="./images/insta2.png"></a></button></div>
          </div>
            <ul class="info_list">
              <li class="info_item">
                <p class="date">2022/10/11</p>
                <p class="category"><span>【出展情報】</span></p>
                <p class="info">2022.12.17~25 東京渋谷のBoji hair +gallery様主催『Boji Christmas Exhibition』に作品を出展します。</p>
              </li>
            </ul>
            <ul class="info_list">
              <li class="info_item">
                <p class="date">2022/10/8</p>
                <p class="category"><span>【お知らせ】</span></p>
                <p class="info">webサイトを開設しました。</p>
              </li>
            </ul>
          </div>
        </div>
    </div>

    <!-- フッター使い回し -->
    <?php include('footer.php'); ?>
  </div>

<script src="./js/main.js"></script>
</body>
</html>