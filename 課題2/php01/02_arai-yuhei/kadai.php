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
       $a= mt_rand(1, 3);

              if ($a==1) {
                     echo '<p class="text-center">ぐー</p>';
                     echo '<p class="text-center"><img src="fortune/26334454.jpg" style="width:200px;height:200px"></p>';
              }
              
              if($a==2){
                     echo '<p class="text-center">ちょき</p>';
                     echo '<p class="text-center"><img src="fortune/26334455.jpg" style="width:200px;height:200px"></p>';
              }
              if($a==3){
                     echo '<p class="text-center">ぱー</p>';
                     echo '<p class="text-center"><img src="fortune/26334456.jpg" style="width:200px;height:200px"></p>';
              }
       echo '</div>';





?>
</section>
</body>
</html>