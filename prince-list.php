<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-list</title>
    <link rel="stylesheet" href="./css/list.css">
</head>
<body>
<div class="container">
    <div class="content">
        <div class="icon"><img src="img/ロゴ.png" width="250px" height="250px"></div>
        <div class="title"><p>プレイヤーリスト</p></div><br>
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
    echo '　 プレイスタイル : ', $row['style_name'], '<br>';
    echo '</p>';
}
$pdo = null;
?>
<div class="link"><p><a href="prince-menu.php">トップページに戻る</a></p></div>
    </div>
</div>
</body>
</html>
