<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>TODOリスト</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 5px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>TODOリスト</legend>
     <label>タスク：<input type="text" name="name"></label><br>
     <label>メモ：<textArea name="naiyou" rows="2" cols="10"></textArea></label><br>
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>

<!-- Main[End] -->


</body>
</html>
