<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


$a= mt_rand(1, 4);

if ($a==1) {
        echo "大吉です";
        echo '<img src="fortune/daikiti.jpg" style="width:200px;height:200px">';
    }elseif($a==2){
        echo "中吉です";
        echo '<img src="fortune/tyuukiti.png" style="width:200px;height:200px">';
    }elseif($a==3){
        echo "吉です";
        echo '<img src="fortune/syoukiti.jpg" style="width:200px;height:200px">';
    }else{
       echo "凶です";
       echo '<img src="fortune/kyou.jpg" style="width:200px;height:200px">';
}













?>
</body>
</html>