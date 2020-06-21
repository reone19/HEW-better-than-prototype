<?php
// qaの初期値
$q = 0;
$a = 0;
$b = 0;
// GETでqクエスションナンバーとaYESの数とbNOの数を取得する
if (isset($_GET["q"])) { $q = $_GET["q"]; }
if (isset($_GET["a"])) { $a = $_GET["a"]; }
if (isset($_GET["b"])) { $b = $_GET["b"]; }

// qastionの配列
$qastion = array("1" => "あなたは時計にこだわりは持つタイプか？","2" => "あなたは電車の中で空いてる最後の席を確保しました。しかし、弱弱しく立っている高齢者を見つけてしまいました。<br>見て見ぬふりをしますか？","3" => "あなたは着けてる腕時計をうっかり落として壊してしまいました。<br>素直に修理に出しますか？","4" => "ある日あなたが道を歩いてると、道端に落ちてる腕時計を発見しました。<br>あなたはそれを拾いますか？","5" => "宴会の席で、周りにお酒を強引にすすめられると断われますか？");

// resultの配列
$result_a_seikaku = array("0"=> "無関心","1" => "seikaku_img/seikaku2.png","2" => "seikaku_img/seikaku3.png","3" => "seikaku_img/seikaku4.png","4" => "seikaku_img/seikaku5.png","5" => "seikaku_img/seikaku1.png");
$result_a_name = array("0"=> "やり直しが","1" => "ボールウォッチ（BALL Watch)：腕時計パイオニア パワーリザーブ
PM9026C-SCJ-BK","2" => "カシオ(CASIO)：腕時計MQ-24-7B2LLJF","3" => "オリス(ORIS)：腕時計ORIS PRODIVER クロノグラフ","4" => "フォシル(FOSSIL):腕時計FTW4025","5" => "ロレックス(ROLEX)：腕時計コスモグラフ デイトナ 116500LN");
$result_a_img = array("0"=> "ないです","1" => "seikaku_img/sozai1.jpg","2" => "seikaku_img/sozai2.jpg","3" => "seikaku_img/sozai5.png","4" => "seikaku_img/sozai21.jpg","5" => "seikaku_img/sozai3.jpg");
$result_a_sentence = array("0"=> "あなたを図りかねます","1" => "何事に関しても心配し疑ってかかってしまうあなたには、ボールウォッチ腕時計パイオニア パワーリザーブモデルの時計がピッタリかもしれません。この時計モデルはエンジニア用に開発された物で、時間の正確性を突き詰めています。物事に対して自分の望む正確性を要求するあなたには、時間においてもこだわりが強いため、この時計はあなたの信用できる相棒となることでしょう。","2" => "あなたは身の回りの物事に対して、中立的な立場を築くのが上手なタイプのようです。そんなあなたに助けとなるよう、このカシオの腕時計をおすすめします。チープカシオというカシオでは安価なモデルとなっていますが、デザインと時計の動作性能において問題のない中立性を保証します。人生尖ったり崩れたりするのを潜在的に避けるあなたには使いやすく、あなたに向いた時計ではないでしょうか。","3" => "良く回りに目が行くあなたは、周りの物事に対して興味の表れか、トラウマなのか、とても敏感なのかもしれません。そんなあなたにおすすめなのが、オリス(ORIS)：腕時計クロノグラフモデルです。時計でよく聞く「クロノグラフ」の意味は「時間を測る」意味を持ちます。故に、周りに好奇心がよく行くあなたは周りより洞察力と考察を持ち、物事の距離をよく測れます。測り方の名手であるあなたにはこの時計はピッタリの時計です。何事にも距離の測り方は大事とも言いますし。","4" => "さまざまな場面で、環境の変化や柔軟な思考を得意とするあなたは、物事に対して感受性が秀でています。そんなあなたには時代の変化を表すような時計が合うかもしれません。その時計はフォシル腕時計FTW4025モデルの時計です。この時計はスマートウォッチで、複数のOS機能、スポーツ耐久性能、ミュージックと、あらゆるシチュエーションに対して役に立ちます。近年ではクラシックからデジタルと、またそれを超えてタブレットウォッチと、時計の在り方は変化を遂げてきています。感受性の高いあなたなら時計の良し悪しを柔軟に判断し、自分にとっての最良を導き出せることでしょう。よって、時代の変化と変わっていくあなたにはこの時計は最良の選択かもしれません。","5" => "あなたはまさしく人生において主人公と言えるでしょう。あなたはあらゆる物事を真摯で受け止めつつも、何が正しく、何が良くないのかを問い続ける人生になります。そういった面を元に、あなたは主張が強いともとらえることができるでしょう。そんなあなたにおすすめできる時計は、ロレックス、腕時計コスモグラフ デイトモデルの時計です。この時計はロレックスのクロノグラフの部類に入るビジネス時計です。ロレックスの時計はお金持ちの時計、成功者の時計と言われる象徴ですが、あなたにはふさわしい時計かもしれません。なぜなら、あなたは人生の主人公ではありますが、同時に人生の成功者かもしれないからです。");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>時計診断サイト</title>
<link rel="stylesheet" href="css/sikaku2.css">
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
  <h1><性格＋時計＝あなたにピッタリな時計は？></h1>
  <hr>
    <!-- 診断エリア -->
    <div class="inner_wrapper">

    <?php  if ( !$q ): ?>
            <!--- ここからスタート --->
            <div class="content_link2">
            <a href="seikaku_diag3.php?q=1&a=0&b=0"><h2 class="h2_3">スタート</h2></a>
            </div>
            <!--- ここまでスタート --->
            <?php  elseif ( $q < 6 ): ?>
            <!--- ここからクエスション --->
            <h1>Q<?php echo $q; ?></h1>
            <p><?php echo $qastion[$q] ?></p>
            <div class="central_cover">
            <div class="images">
              <a href="seikaku_diag3.php?q=<?php echo $q + 1; ?>&a=<?php echo $a + 1; ?>&b=<?php echo $b; ?>" class="central">
            <p class="narabi">はい</p>
              </a>
            </div>
            <div class="images">
              <a href="seikaku_diag3.php?q=<?php echo $q + 1; ?>&b=<?php echo $b + 1; ?>&a=<?php echo $a; ?>" class="central">
            <p class="narabi">いいえ</p>
              </a>
            </div>
            </div>
            <!--- ここまでクエスション --->
            <?php  else: ?>
            <!--- ここから結果画面 --->
            <div class="centralcover">
            <div class="central2">
            <h2 class="img_resize2">あなたは<img src="<?php echo $result_a_seikaku[$a]; ?>" class="size">タイプです</h2>
            <p><?php echo $result_a_name[$a]; ?>：があなたにピッタリです</p>
            <p class="img_resize"><img src="<?php echo $result_a_img[$a]; ?>" class="size2"></p>
            <p><?php echo $result_a_sentence[$a]; ?></p>
            </div>
            </div>
            <!-- 前のページへ -->
            <div class="down_link">
            <a href="seikaku_diag1.html"class="content_link2"><h2 class="h2_2">前のページに戻る</h2></a>
            </div>
            <!--- ここまで結果画面 --->
    <?php    endif ?>
    </div>
</div>

</body>
</html>
