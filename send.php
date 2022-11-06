<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = 'monami28310.works@gmail.com';
$subject = 'お問い合わせ';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// メール本文を作成
$mailText = '名前：'.$fullname."\r\n"
           .'メールアドレス：'.$email."\r\n"
           .'お問い合わせ内容：'.$message."\r\n";

mb_send_mail($to, $subject, $mailText);
?>



<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>monami's room</title>
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
          <div class="aboutimg"><img class="about_img" src="./images/sepia_cosmos.webp" alt="コスモスと女の子画像"></div>
          <div>
            <p class="content_text">【送信完了】 <br>お問い合わせありがとうございました。<br>ご返信まで今しばらくお待ちくださいませ。</p>
            <div class="return_btn"><a class="return_link" href="index.php">topページに戻る</a></div>
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