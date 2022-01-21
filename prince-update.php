<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-update</title>
    <link rel="stylesheet" href="./css/update.css">
</head>
<body>
<div class="container">
 <div class="content">
     <div class="icon"><img src="img/ロゴ.png" width="250px" height="250px"></div>
<form action="prince-update-input.php" method="post">
    <p>更新する番号を入力してください</p>
    <label class="effect">
    <p><input class="box" type="text" name="id"></p><br>
    </label>
    <p><input class="btn" type="submit" value="更新画面へ"></p><br>
</form>
<?php
$pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;
                dbname=LAA1291141-school;charset=utf8',
    'LAA1291141',
    'tt050616');
foreach ($pdo->query('select * from prince inner join playstyle on prince.style_id = playstyle.style_id') as $row) {
    echo '<p>';
    echo $row['id'];
    echo '. 名前 : ' , $row['name'], '<br>';
    echo '   　 学校名 : ', $row['school_name'], '<br>';
    echo '　 プレイスタイル : ', $row['style_name'];
    echo '</p>';
}
$pdo = null;
?>
 </div>
</div>
</body>
</html>
