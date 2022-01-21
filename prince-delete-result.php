<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-delete-result</title>
    <link rel="stylesheet" href="./css/delete2.css">
</head>
<body>
<div class="container">
    <div class="content">
        <div class="icon"><img src="img/ロゴ.png" width="250px" height="250px"></div>
<?php
$pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;
                dbname=LAA1291141-school;charset=utf8',
    'LAA1291141',
    'tt050616');
$sql=$pdo->prepare('DELETE from prince where id = ?');
if($sql->execute([$_POST['number']])){
    echo '<div class="txt"><p>削除しました。</p></div>';
} else {
    echo '<div class="txt"><p>エラーが発生しました。</p></div>';
}
$pdo = null;
?>
<div class="link"><p><a href="prince-list.php">プレイヤーリストへ</a></p></div>
    </div>
</div>
</body>
</html>
