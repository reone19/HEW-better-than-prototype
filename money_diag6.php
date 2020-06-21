<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>時計診断サイト</title>
<link rel="stylesheet" href="css/money_diag2.css">
<!-- <script src="js/jquery-2.1.4.min.js"></script>
<script src="js/script.js"></script> -->
</head>
<body>

    <!-- ヘッダーエリア -->
<header id="header">

      <h1 class="header__logo"><a href="index.html"><img class="logo" src="images/IMG_0039.png" alt="logo"></a></h1>

</header>
    <!-- コンテンツエリア -->

<div id="wrapper">
  <h1>あなたが選んだ金額の時計は？</h1>
　<?php
  $money_answer=$_POST["金額選択1"];
  // print_r($money_answer);
  // 時計の各価格
  $result_price=array("1"=>"14,080","2"=>"19,800","3"=>"24,200","4"=>"22,000","5"=>"38,500","6"=>"41,800","7"=>"77,000","8"=>"90,000");

  // 時計名の各名前
  $result_name=array("1"=>"サルバトーレ・マーラ：腕時計SM12105S-SSWH","2"=>"株式会社ドウシシャ：フルボ腕時計F02-SWHLG","3"=>"マークジェイコブス(Marc Jacobs)：SET_（カラー複数あり）腕時計","4"=>"ニクソン(NIXON)：セントリークロノレザー腕時計A4051888","5"=>"シチズン(CITIZEN)：腕時計ダイレクトフライト CB1120-50E","6"=>"スイスミリタリー(SWISS MILITARY HANOWA)：腕時計CHALLENGER PRO ML442","7"=>"ティソ(TISSOT)：腕時計1000シースター クロノグラフ","8"=>"カシオ(CASIO)：腕時計プロトレックPRW-7000FC-1JF");


  // 該当時計の各画像
  $result_img=array("1"=>"money_img/sozai1.webp","2"=>"money_img/sozai1.jpg","3"=>"high_img/sozai7.jpg","4"=>"money_img/sozai2.jpg","5"=>"money_img/sozai3.webp","6"=>"money_img/sozai2.webp","7"=>"money_img/sozai5.webp","8"=>"money_img/sozai6.webp");


  // 該当時計の各解説分
  $result_sen=array("1"=>"イタリアの文化、デザインとインターナショナルなセンスとの融合が生んだ「挑発とエレガンス」。どんな場所、どんな時間にもふさわしいコレクションとなるように優れたクオリティになっています。シーンやスタイルを選ばずコーディネートのアクセントを活かせば、あなたに「挑発とエレガンス」さを提供してくれる時計です。","2"=>"イタリアから生まれた人気ブランドフルボ。イタリアといえば派手めなデザインを想像しますがシンプルを基調としながらも中身にもこだわりを持った腕時計です。このデザインは落ち着きのある雰囲気を出してくれます。シーンを選ばず腕元を上品に魅せてくれる時計なので、あなたがシンプルな時計が好きな場合には好きになれるかもしれない時計です。","3"=>"1963年アメリカ生まれのファッションデザイナーブランドである。アメリカのファッションシーンを若い時代から牽引してきたデザイナーです。お洒落な女性から圧倒的な支持を受けていることで有名だったりします。","4"=>"ニクソンは、1997年にアメリカで腕時計ブランドとして立ち上げられました。スポーツ向けの腕時計ブランドとして有名で、特にサーフィンやスノーボードなどのボードスポーツを行う人向けに製品の開発、販売を行っています。華やかなデザインが多いので、普段からファッションに関心が高い人におすすめです。","5"=>"シチズン(CITIZEN)は、1930年に精密機器メーカーとして日本で創業されました。電池交換のいらないエコドライブ仕様やアスリート向けなど幅広い種類の時計を取り扱っていることで有名で、現在でも多くの人々に愛用されています。庶民時計と捉えられがちですが、ちゃんと高い時計もたくさんあります。","6"=>"スイスミリタリーは、1990年に誕生したスイスの腕時計メーカーです。比較的若いメーカーでありながら耐久性と実用性の高さに定評があり、老舗ブランドと並んでも遜色ない程に多くの人々に知られています。視認性が良く、一瞬で時間と日付を確認できるので、常に時間に追われているビジネスマンに好まれます。","7"=>"ティソ(TISSOT)は1853年にスイスで創業した老舗腕時計メーカーです。スイスを代表する存在であり、クラシカルなデザインからタッチパネル採用モデルまで懐が深い物が多く、同じような造形をした時計でも、それぞれ機能が違ったりします。","8"=>"カシオは日本の時計メーカーです。カシオには有名ブランドが複数あり、G-SHOCKやプロトレックもその中の一部です。その中のプロトレックはアウトドアなどをする人に向けたブランドで、釣り人や登山などの広い層から愛用されています。頑丈さと言えばG-SHOCkが強いイメージがありますが、このプロトレックも例にもれずアウトドア用なのですごくタフな時計が多く存在します。");

// 該当時計の各URL
  $result_url= array("1"=>"http://www.salvatoremarra.com/collection.html","2"=>"https://www.furbodesign.com/collection/","3"=>"https://www.marcjacobs.jp/products/list.php?category_id=637","4"=>"https://www.nixon.com/jp/ja?gclid=Cj0KCQjw0pfzBRCOARIsANi0g0tgQ7e5UEaKmjQd1Rd4XpLB0Vq3ErxqCCj3aF9D0ePb42IG4YGDaBEaAj3CEALw_wcB","5"=>"https://citizen.jp/product/attesa/lineup/detail.html?tag=0","6"=>"http://www.swissmilitary.jp/","7"=>"https://www.tissotwatches.com/ja-jp/","8"=>"https://protrek.jp/");

  $con = mysqli_connect("localhost", "root", "") or die("接続失敗");
  mysqli_set_charset($con, "utf8");
  mysqli_select_db($con, "HEW");
  $sql = "UPDATE money2 set count=(select count from money2 where id =$money_answer)+1
   WHERE id = $money_answer";
  mysqli_query($con, $sql);
  mysqli_close($con);
  ?>



  <h2><?php
    if(!empty($money_answer))
    {
         echo "選択された金額の結果:".$result_price[$money_answer]."円<br>";
    }
    else
    {
         echo "<p>金額が選択されていません</p>\n";
    }
   ?> </h2>
  <hr>

  <div class="centralcover">
  <div class="central">
  <?php  if(!empty($money_answer)): ?>

    <?php  echo "<h3>$result_name[$money_answer]</h3>"."<br>"; ?>
    <?php  echo "<p class='img_resize'><img src=$result_img[$money_answer]></p>"."<br>"; ?>
    <?php  echo $result_sen[$money_answer]; ?>

  <?php  else: ?>

        <?php echo "<p>もう一度やり直してください</p>\n"; ?>

  <?php    endif ?>

　</div>
         <div class="link">
           <?php  if(!empty($money_answer)): ?>
          <a href="<?php echo $result_url[$money_answer]; ?>"><h2 class="h2_1">----該当サイトへ----</h2></a>
        <?php  else: ?>
            <?php  echo ""; ?>
        <?php    endif ?>
         </div>


</div>
      <!-- 前のページのリンクエリア -->
      <div class="down_link">
      <a href="money_diag1.html"class="content_link2"><h2 class="h2_2">前のページに戻る</h2></a>
      </div>
</div>
</body>
</html>
