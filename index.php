<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>monami's room</title>
  <!-- description -->
  <meta name="description" content="artist〈webデザイナー/イラストレーター〉monamiのartgallery&ポートフォリオサイトです。">
    <!--SNSでシェアされた時のタグ-->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@monami283103" />
  <meta property="og:url" content="https://www.instagram.com/monami283103/?r=nametag" />
  <meta property="og:title" content="monamiのartgallery&ポートフォリオサイト" />
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

    <!-- ヘッダーを外部ファイル化し、複数ページで使い回す -->
    <?php include('navbar.php'); ?>

    <main>
    <!-- top画 -->
      <div class="maincontents">
        <div class="topcontents">
          <div class="title_corner">
            <h1 class="title top">monami's room</h1>
            <p class="sub_title">-artgallery & portfolio site-</p>
          </div>
          <div class="scroll_icon"><span>Scroll</span></div>
        </div>
        <!-- gallery -->
        <div class="contents">
          <div class="content">
            <h2 class="content_title">gallery&portfolio</h2>
            <p class="sub_contenttitle">-過去のイラスト＆お仕事一覧-</p>
              <div class="menu">
                <p class="sub_contenttitle">-illust-</p>
                  <ul class="gallery">
                    <li class="galleryimg"><img class="gallery_img" src="./images/horn.jpeg" alt="ホルン吹きの女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/cello.jpeg" alt="チェロ奏者の女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/angel.jpeg" alt="天使の微笑み"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/angel2.jpeg" alt="天使の魔法"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/akazukin.jpeg" alt="赤ずきんな女の子とdance flower"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/baqet.jpeg" alt="フランスパンを持った女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/aries.jpeg" alt="牡羊座の女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/pisces.jpeg" alt="魚座の女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/wrap-flowers.jpeg" alt="花に包まれた女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/lotus.jpeg" alt="蓮の花の妖精"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/tulip.jpeg" alt="チューリップ畑の上の女の子"></li>
                    <li class="galleryimg"><img class="gallery_img" src="./images/logo.jpeg" alt="bird's pattern"></li>
                  </ul>
              </div>
              <div class="menu">
                <p class="sub_contenttitle">-works-</p>
                <ul class="gallery">
                  <li class="galleryimg"><a href="http://aoiya-smartphone-repair.xyz/" target="_blank" rel="noopener"><img class="gallery_img" src="./images/aoiya.jpeg" alt="aoiya_site"></a></li>
                  <li class="galleryimg"><a href="https://www.instagram.com/yajirusi_watasi/" target="_blank" rel="noopener"><img class="gallery_img" src="./images/tourou.png" alt="tourou_work"></a></li>
                </ul>
                <p class="content_text">他作品や過去のお仕事はinstagramでもご覧頂けます</p>
                <div class="instabtn_area"><button class="instagram_btn"><a class="instagram_link" href="https://www.instagram.com/monami283103/?r=nametag" target="_blank" rel="noopener"><img class="instalogo" src="./images/insta2.png"></a></button></div>
              </div>
          </div>
        </div>

        <!-- topへ戻るボタン -->
        <div class="page_top"><a class="page_topLink" href="#">top</a></div>
      </div>
    </main>

    <!-- フッターを外部ファイル化し、複数ページで使い回す -->
    <?php include('footer.php'); ?>
  </div>
<!-- scriptタグ -->
<script src="./js/main.js"></script>
</body>
</html>


<!-- 各ポートフォリオの紹介 -->