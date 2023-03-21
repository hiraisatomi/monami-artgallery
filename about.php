<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>monami's room &#124; about</title>
  <!-- description -->
  <meta name="description" content="webデザイナー/イラストレーター monamiのartgallery&work紹介のサイトです。">

  <!--SNSでシェアされた時のタグ-->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@monami283103" />
  <meta property="og:url" content="https://www.instagram.com/monami283103/?r=nametag" />
  <meta property="og:title" content="monamiのartgallery&work紹介サイト" />
  <meta property="og:description" content="デジタルイラストを作成しています。出展の情報なども随時記載しています。" />
  <meta property="og:image" content="https://www.monami-artgallery.net/images/angel.jpeg" />
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
  
  <link rel="icon" href="./images/top2.webp">
  <link rel="stylesheet" href="./css/style.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
   <!-- jQueryの読み込み -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">

    <!-- ヘッダーを外部ファイル化し、複数ページで使い回す -->
    <?php include('navbar.php'); ?>
    
    <div class="contents">
        <div class="content">
          <div class="aboutimg"><img class="about_img" src="./images/sepia_angel.webp" alt="花の女の子画像"></div>
          <div>
            <h2 class="content_title">monami</h2>
            <p class="sub_contenttitle">-artist〈web designer/illustrator〉-</p>
          </div>
          <div class="content_text">
            <p>関東在住のイラストレーター。</p>
            <p>webデザイン/エンジニアの卵</p>
            <p>イラスト 幼少期から人や身近なものの描写が趣味で、ペン画や漫画を描き始める。iPadを購入の後、メインを手描きからデジタル手法に転換。
            <br>現在は複数のアートギャラリー主催者様にお声掛けいただき、定期的にギャラリーイベントに作品を出展しています。</p>
          </div>
        </div>
      </div>

      <!-- フッターを外部ファイル化し、複数ページで使い回す -->
      <?php include('footer.php'); ?>
  </div>
<!-- scriptタグはbody閉じタグの直前に置く -->
<script src="./js/main.js" defer></script>
</body>
</html>