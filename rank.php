<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>時計診断サイトランキング</title>
<link rel="stylesheet" href="css/rank.css">
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
  <h1>総合金額別診断ランキング</h1>
  <hr>
  <h2>低額診断ランキングコーナー</h2>
    <?php
    $d_rank=array("0"=>"1","1"=>"2","2"=>"3");
    $con = mysqli_connect("localhost", "root", "") or die("接続失敗");
    mysqli_set_charset($con, "utf8");
    mysqli_select_db($con, "HEW");
    $sql = "SELECT * FROM money1 order by count desc";
    $sql2 = "SELECT * FROM money2 order by count desc";
    $sql3 = "SELECT * FROM money3 order by count desc";
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);
    $result3 = mysqli_query($con, $sql3);
    $d_count=0;
    $d_count2=0;
    $d_count3=0;
    while ($row = mysqli_fetch_array($result))
    {
      echo "<div class='inner_wrapper'>";
      echo "<p class='size3'>$d_rank[$d_count]位</p>";
      echo"<hr>";
      echo  $row["name"]."<br>"."<p class='img_resize'><img src='$row[img]'></p>"."<br>"."<hr>"."<br>"."<p>閲覧数</p>".$row["count"]."<br>";
      echo "</div>";


      $d_count++;
      if($d_count > 2)
      {
        // echo $d_count;
        // print gettype($d_count);
        break;
      }
    }
    echo "<hr>";
    echo "<h2>おてごろ診断ランキング</h2>";
    while ($row2 = mysqli_fetch_array($result2))
    {
      echo "<div class='inner_wrapper'>";
      echo "<p class='size3'>$d_rank[$d_count2]位</p>";
      echo"<hr>";
      echo  $row2["name"]."<br>"."<p class='img_resize'><img src='$row2[img]'></p>"."<br>"."<hr>"."<br>"."<p>閲覧数</p>".$row2["count"]."<br>";
      echo "</div>";


      $d_count2++;
      if($d_count2 > 2)
      {
        // echo $d_count;
        // print gettype($d_count);
        break;
      }
    }
    echo "<hr>";
    echo "<h2>むっちゃ高い診断ランキング</h2>";
    while ($row3 = mysqli_fetch_array($result3))
    {
      echo "<div class='inner_wrapper'>";
      echo "<p class='size3'>$d_rank[$d_count3]位</p>";
      echo"<hr>";
      echo  $row3["name"]."<br>"."<p class='img_resize'><img src='$row3[img]'></p>"."<br>"."<hr>"."<br>"."<p>閲覧数</p>".$row3["count"]."<br>";
      echo "</div>";


      $d_count3++;
      if($d_count3 > 2)
      {
        // echo $d_count;
        // print gettype($d_count);
        break;
      }
    }
    mysqli_close($con);

     ?>



     <!-- 前のページへ -->
     <div class="down_link">
     <a href="index.html"class="content_link2"><h2 class="h2_2">前のページに戻る</h2></a>
     </div>

</div>
</body>
</html>
