<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h5>PHPの書き方</h5>
<?php 
    echo'<h3>このように書いていく</h3>';
    echo 5+2 ;
    echo '<br>';
    echo'5+2';
    echo '<br>';
    $apple ="リンゴ";
    echo $apple;
    echo '<br>';
    $num = 10+10;
    echo $num;
    echo '<br>';

    $a=1;
    if ($a==2) {
        echo "回答は１である";
    }else{
        echo "回答は１ではない";
    }
    echo '<br>';

    $b=2;
    if($a="2"){
        echo "回答は2である";
    }else{
        echo "回答は2ではない";
    }
    echo '<br>';
    
    echo mt_rand(1, 15);







?>    
</body>
</html>