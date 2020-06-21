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
  $result_price=array("1"=>"100,100","2"=>"200,000","3"=>"270,000","4"=>"506,000","5"=>"700,201","6"=>"902,370","7"=>"5,281,200","8"=>"8,000,000","9"=>"12,512,999","10"=>"20,088,000");

  // 時計名の各名前
  $result_name=array("1"=>"ハミルトン(HAMILTON)：腕時計H24411732 Ventura Quartz ベンチュラ","2"=>"セイコー(SEIKO)：腕時計アストロンSBXC015","3"=>"シチズン(CITIZEN)：腕時計アテッサCC4006-61E","4"=>"パネライ(PANERAI)：腕時計RADIOMIR BASE 3 DAYS ACCIAIO - 45MM","5"=>"オメガ(OMEGA)：腕時計スピ⁠ードマスタ⁠ー レ⁠ーシング マスタ⁠ー クロノメ⁠ー⁠タ⁠ー","6"=>"ブルガリ(Bulgari)：腕時計BGO41BSLDCH オクト","7"=>"パテック・フィリップ(Patek Philippe)：腕時計5712R","8"=>"グランドセイコー（Grand Seiko)：腕時計SBGZ001","9"=>"ヴァシュロン コンスタンス：腕時計Traditionnelle Skeleton Perpetual Calendar 43172/000P-9236","10"=>"リシャールミル(RICHARD MILLE)：腕時計RM11-02");


  // 該当時計の各画像
  $result_img=array("1"=>"money_img/sozai13.jpg","2"=>"money_img/sozai4.jpg","3"=>"money_img/sozai5.jpg","4"=>"money_img/sozai6.jpg","5"=>"money_img/sozai12.jpg","6"=>"money_img/sozai8.webp","7"=>"money_img/sozai8.jpg","8"=>"money_img/sozai9.jpg","9"=>"money_img/sozai10.jpg","10"=>"money_img/sozai11.jpg");


  // 該当時計の各解説分
  $result_sen=array("1"=>"ハミルトンはアメリカ発祥で、現在はスイスのスウォッチ・グループ傘下の腕時計メーカーです。生産モデルは宝飾腕時計からミリタリーウォッチまで幅広いです。その中でハミルトンのベンチュラは、三角形という斬新で現代的な形をしていますが、実は50年以上の歴史がある腕時計です。服装に合わせにくいことはなく、スーツからカジュアルまで使う場面を選ばないでしょう。","2"=>"SEIKOは日本の時計メーカーです。SEIKOには複数のブランドを抱えており、そのどれらも国内だけでなく世界で人気を誇っています。アストロンもSEIKOブランドの一つで、タフなビジネスマンが使うようなデザインに仕上がったものが多いです。大体の時計が20万を超える時計が多いいので、ご購入の際は思う存分悩みましょう。","3"=>"CITIZENは日本の時計メーカーです。シチズンという名前には「市民に愛され親しまれるモノづくり」という想いが込められています。海外では日本の庶民が使っている時計という認識が強く、日本人は金持ちであるという印象を作っているともされる有名時計メーカです。ちなみにこのアテッサとありますが、このブランドはSEIKOの複数あるブランドの一つです。高いですね。狙うなら楽天で中古かセールを狙うのが良さそうです。","4"=>"パネライは聞いたことがあるでしょうか？正式にはオフィチーネ・パネライといいますが、この時計メーカはイタリア時計メーカの古参と言われています。ウィキペディアには民生用高級腕時計メーカとして有名などと書いていますが、高級とは、民生用とは何かと問いたくなるほどに高い時計ばかりです。今上にあげてます時計も、パネライの中じゃあ安い方だと思います。一応時計の特徴について書くと、「大きくて厚い」ケースデザインがパネライの最大の特徴だそうです。古くからイタリア軍用時計を開発してたいた頃から独自のスタイルを守ってきているだそうです。ミリタリー時計好きには、パネライの時計が憧れの軍用時計だとかも言われています。あなたにピッタリかもしれません。","5"=>"オメガは世界的に有名なスイス高級時計メーカーとして知られています。オメガと言えば良く、初めて人類が月に行った時に宇宙飛行士が身に着けていた「スピードマスター プロフェッショナル」というモデルの時計で有名だといわれるメーカーです。また、オメガという時計メーカーは宇宙に行く前からレーシング時計として有名だったとも言われているようですね。上の画像の時計もレーシング時計の一つです。見ればわかりますが、そりゃ高いですね（諦め）で尽きます。しかし、「将来努力次第では」と考えさせられる時計です。あなたにピッタリですよ？","6"=>"ブルガリは時計メーカではなく、実は古くからのイタリアのローマに創業した高級宝飾品ブランドメーカーだそうです。時計界においてブルガリの時計は、８角形の時計を作ることで有名だとのこと。ヨーロッパなどで古くから8角形を「永遠のモチーフ」とされるらしく、永遠という世界のトップジュエラーであるブルガリらしさを表しています。高い....","7"=>"パテック・フィリップとは、スイスの高級時計メーカーです。高級を超えた超高級時計をたくさん売っています。ヴァシュロン・コンスタンタン、オーデマ・ピゲとともに世界三大高級時計メーカーの一つとして数えられることが多いです。欲しいですか？頑張って下さい。","8"=>"グランドセイコーとは時計メーカーセイコーのブランドの一つとされています。世界の時計スイスとされる、スイストップを走るスイス時計メーカー達と真っ向から競い合えるセイコーブランドと言われています。日本が唯一スイス時計メーカにとてつもなくライバル視されているとも過言ではないくらいレベルが高いです。後とても高いです。たまに、グランドセイコーはセイコー社から独立していると言う方々いるんですが、一応セイコー社のブランドの一つとされています。","9"=>"ヴァシュロン・コンスタンタンは、スイスのジュネーヴを本拠地とする時計メーカーです。パテック・フィリップ、オーデマ・ピゲと共に世界三大高級時計メーカーの一つとされています。東京の３LDKのマンション1室を買うよりは安いですね。もしかして将来的に買えるのでは？","10"=>"時は2001年。機械式時計が再び注目されスイスの時計業界が盛り上がってきた時期にリシャール・ミルは誕生しました。スイスの高級時計メーカの時計は良く「エクストリームウォッチ」と呼称されますが、リシャーミルの時計は「エクストリームウォッチ―過激、極端な時計―」と言われるほどに時計界で一番の異端だと言われています。なぜ異端と言われるのかというと、素材、設計、コンセプトすべてにおいて究極を突き詰めているだけとしか言いようがありません。あまりの製作難易度の高さに、年間限られた数しか供給できないほどなのです。値段もさることながらこの時計を所有している人は、真の人生の成功者と言える人物でしょう。");
// つかれた。
// 該当時計の各URL
  $result_url= array("1"=>"https://www.hamiltonwatch.com/ja-jp/","2"=>"https://www.seikowatches.com/jp-ja","3"=>"https://citizen.jp/index.html","4"=>"https://www.panerai.com/ja/home.html","5"=>"https://www.omegawatches.jp/ja/","6"=>"https://www.bulgari.com/ja-jp/","7"=>"https://www.patek.com/ja/%E3%83%9B%E3%83%BC%E3%83%A0","8"=>"https://www.seikowatches.com/jp-ja","9"=>"https://www.vacheron-constantin.com/jp/home.html","10"=>"http://www.richardmille.jp/");

  $con = mysqli_connect("localhost", "root", "") or die("接続失敗");
  mysqli_set_charset($con, "utf8");
  mysqli_select_db($con, "HEW");
  $sql = "UPDATE  money3 set count=(select count from money3 where id =$money_answer)+1
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
