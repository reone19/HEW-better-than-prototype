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
  $money_answer=$_POST["金額選択"];
  // print_r($money_answer);
  // 時計の各価格
  $result_price=array("1"=>"300","2"=>"500","3"=>"2688","4"=>"3300","5"=>"6490","6"=>"8231");

  // 時計名の各名前
  $result_name=array("1"=>"ダイソー(DAISO)：ブループラネットG-SHOCK風","2"=>"ダイソー(DAISO)：ミリウォッチ","3"=>"カレン(CURREN)：ビジネス ファッション 腕時計 8291G","4"=>"カシオ(CASIO)：AW-80-1AJF","5"=>"カシオ(CASIO)：HDA-600B-7BJF","6"=>"インビクタ：フォースクロノグラフ　腕時計 1512");
  // $result_name3=array();

  // 該当時計の各画像
  $result_img=array("1"=>"cost_img/sozai4.jpeg","2"=>"cost_img/sozai2.jpg","3"=>"cost_img/sozai13.jpg","4"=>"cost_img/sozai9.jpg","5"=>"cost_img/sozai8.jpg","6"=>"cost_img/sozai15.jpg");

  // $result_img3=array();

  // 該当時計の各解説分
  $result_sen=array("1"=>"恐らくDAISO最強腕時計。激しい水道流水に思いっきりまんべんなくさらす。つけたまま風呂に入り、水中引き回しの刑に処す。床に置いて気付かない振りして軽く蹴って『あ、ゴメン』と言う。こんなことしても壊れませんでした。おすすめです。","2"=>"ベトナム戦争モデル（ GG-W-113 ）なんて呼ばれているベトナム戦争の際にアメリカ軍に支給された「ベンラス」モデルにそっくりな時計です。","3"=>"ビジネスの場では常に誠実さと、落ち着いた物腰が好まれます。この時計は落ち着いたブラウン色の革ベルトを採用しており、スーツにしっかりと馴染む腕時計となっています。","4"=>"アナログとデジタルのコンビネーション表示形式を採用した、メンズ向けチープカシオです。電話帳機能を搭載しており、最大で30件分の登録が可能なため、ちょっとしたメモ代わりにも便利です。もしあなたが携帯がなく、知りたい人の電話番号がわからなくなった場合、時計に電話番号が記録されていれば助けになるかもしれません。","5"=>"3針式のアナログ表示を採用した、メンズ向けのチープカシオです。電池が長持ちするというの魅力ポイントがあり、約10年と長寿命です。あなたがタフなチープカシオを探している場合、おすすめのモデルです。","6"=>"この時計はインビクタという古典的な様式で有名なスイスブランドの時計です。インビクタは通常1万円以内で買えたりしない時計が多いいのですが、現在在庫がある限り、低価格で買えます。性能自体も高級時計と同じくらいなのでおすすめです。");
// 該当時計の各URL
  $result_url= array("1"=>"https://www.amazon.co.jp/ref=nav_logo","2"=>"https://www.daiso-sangyo.co.jp/","3"=>"https://www.amazon.co.jp/ref=nav_logo","4"=>"https://www.e-casio.co.jp/shop/c/c1064/","5"=>"https://www.e-casio.co.jp/shop/c/c1064/","6"=>"https://www.amazon.co.jp/ref=nav_logo","7"=>"");

  $con = mysqli_connect("localhost", "root", "") or die("接続失敗");
  mysqli_set_charset($con, "utf8");
  mysqli_select_db($con, "HEW");
  $sql = "UPDATE  money1 set count=(select count from money1 where id =$money_answer)+1
   WHERE id = $money_answer";
  mysqli_query($con, $sql);
  mysqli_close($con);
  ?>


<!-- 金額が選択されたか、また、どの金額が選択されたか表示確認 -->
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
