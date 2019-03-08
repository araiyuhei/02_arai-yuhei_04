<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="test.css">
    <title>Document</title>
</head>
<body>

<section>
<?php
       echo'<h2>じゃんけんゲーム</h2>';
       echo '<div class="jyanken">';
       $a= mt_rand(1, 9);

              if ($a==1) {
                     echo '<p class="text-center">あなたはぐー　　　　　　　　　相手はぐー</p>';
                     echo '<p class="text-center"><img src="fortune/26334454.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334454.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あいこ！もう一回！</p>';
              }
              
              if ($a==2) {
                     echo '<p class="text-center">あなたはぐー　　　　　　　　　相手はちょき</p>';
                     echo '<p class="text-center"><img src="fortune/26334454.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334455.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あなたの勝ち</p>';

              }if ($a==3) {
                     echo '<p class="text-center">あなたはぐー　　　　　　　　　相手はぱー</p>';
                     echo '<p class="text-center"><img src="fortune/26334454.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334456.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あなたの負け</p>';

              }if ($a==4) {
                     echo '<p class="text-center">あなたはちょき　　　　　　　　　相手はちょき</p>';
                     echo '<p class="text-center"><img src="fortune/26334455.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334455.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あいこ！もう一回！</p>';
              }if ($a==5) {
                     echo '<p class="text-center">あなたはちょき　　　　　　　　　相手はぱー</p>';
                     echo '<p class="text-center"><img src="fortune/26334455.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334456.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あなたの勝ち</p>';
              }if ($a==6) {
                     echo '<p class="text-center">あなたはちょき　　　　　　　　　相手はぐー</p>';
                     echo '<p class="text-center"><img src="fortune/26334455.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334454.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あなたの負け</p>';
              }if ($a==7) {
                     echo '<p class="text-center">あなたはぱー　　　　　　　　　相手はぱー</p>';
                     echo '<p class="text-center"><img src="fortune/26334456.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334456.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あいこ！もう一回！</p>';
              }if ($a==8) {
                     echo '<p class="text-center">あなたはぱー　　　　　　　　　相手はちょき</p>';
                     echo '<p class="text-center"><img src="fortune/26334456.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334455.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あなたの負け</p>';
              }if ($a==9) {
                     echo '<p class="text-center">あなたはぱー　　　　　　　　　相手はぐー</p>';
                     echo '<p class="text-center"><img src="fortune/26334456.jpg" style="width:200px;height:200px">
                                                  <img src="fortune/26334454.jpg" style="width:200px;height:200px"></p>';
                     echo '<p class="text-center">あなたの勝ち</p>';
              // }if ($a==1) {
              //        echo '<p class="text-center">あなたはぐー　　　　　　　　　相手はぐー</p>';
              //        echo '<p class="text-center"><img src="fortune/26334454.jpg" style="width:200px;height:200px">
              //                                     <img src="fortune/26334454.jpg" style="width:200px;height:200px"></p>';
              //        echo '<p class="text-center">あいこ！もう一回！</p>';
              // }if($a==2){
              //        echo '<p class="text-center">ちょき</p>';
              //        echo '<p class="text-center"><img src="fortune/26334455.jpg" style="width:200px;height:200px"></p>';
              // }
              // if($a==3){
              //        echo '<p class="text-center">ぱー</p>';
              //        echo '<p class="text-center"><img src="fortune/26334456.jpg" style="width:200px;height:200px"></p>';
               }
       echo '</div>';





?>
</section>
</body>
</html>