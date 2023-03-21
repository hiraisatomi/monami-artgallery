<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>monami's room &#124; プライバシーポリシー</title>
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
        <div class="content privacy">
          <div class="aboutimg"><img class="about_img" src="./images/pink-girl.jpeg" alt="top画像"></div>
          <div class="policytitle_content">
            <h2 class="content_title">privacypolicy</h2>
            <p class="content_text">プライバシーポリシー</p>
            <p class="policy_text">当サイトは、個人情報の重要性を認識し、個人情報を保護することが社会的責務であると考え、個人情報に関する法令を遵守し、当サイトで取り扱う個人情報の取得、利用、管理を適正に行います。</p>
          </div>
          <div class="policy_content">
            <h3 class="policy_title">個人情報の利用目的</h3>
            <p class="policy_text">当サイトでは、お問い合わせや記事へのコメントの際、名前やメールアドレス等の個人情報を入力いただく場合がございます。
            <br>取得した個人情報は、お問い合わせに対する回答や必要な情報を電子メールなどをでご連絡する場合に利用させていただくものであり、これらの目的以外では利用いたしません。</P>

            <h3 class="policy_title">広告について</h3>
            <p class="policy_text">当サイトでは、第三者配信の広告サービス（Googleアドセンス、A8.net）を利用しており、ユーザーの興味に応じた商品やサービスの広告を表示するため、クッキー（Cookie）を使用しております。
            <br>クッキーを使用することで当サイトはお客様のコンピュータを識別できるようになりますが、お客様個人を特定できるものではありません。</p>

            <p class="policy_text">Cookieを無効にする方法やGoogleアドセンスに関する詳細は<a class="google_link" href="https://policies.google.com/technologies/ads?gl=jp" target="_blank" rel="noopener">「広告 – ポリシーと規約 – Google」</a>をご確認ください。</p>

            <h3 class="policy_title">アクセス解析ツールについて</h3>
            <p class="policy_text">当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。このGoogleアナリティクスはトラフィックデータの収集のためにクッキー（Cookie）を使用しております。トラフィックデータは匿名で収集されており、個人を特定するものではありません。</p>
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