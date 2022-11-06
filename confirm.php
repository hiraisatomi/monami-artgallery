<?php
// $_POST[]によって受け取ったデータを変数に代入
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
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
        <div>
          <h1 class="content_title">Confirmation</h1>
          <p class="content_text">確認</p>
        </div>
        <div class="form_contents">
          <form action="send.php" method="post" name="form" required onsubmit="return validate()">
          <div class="form_content">
            <p class="form_label"><label for="required-input">お名前</label></p>
            <input type="text" name="fullname" placeholder="例）山田太郎" value="<?php echo $fullname; ?>" maxlength="30" readonly>
            <span class="help-text"></span>
          </div>
          <div class="form_content">
            <p class="form_label"><label for="required-input">メールアドレス</label></p>
            <input type="email" name="email" placeholder="例）guest@example.com" value="<?php echo $email; ?>" maxlength="50" readonly>
            <span class="help-text"></span>
          </div>
          <div class="form_content">
              <p class="form_label"><label for="required-input">お問い合わせ内容</label></p>
              <textarea name="message" rows="5" placeholder="お問合せ内容を入力" maxlength="3000" readonly><?php echo $message; ?></textarea>
              <span class="help-text"></span>
          </div>

          <!-- 入力画面から受け取ったデータを格納 -->
          <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="message" value="<?php echo $message; ?>">
          <button class="form_btn back"  type="button" onclick="history.back()">戻る</button>
          <button class="form_btn" type="submit">送信</button>
          </form>
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