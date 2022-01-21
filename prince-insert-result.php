<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-insert-result</title>
    <link rel="stylesheet" href="./css/insert.css">
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

$sql=$pdo->prepare('insert into prince(name, school_name, style_id) VALUES(?,?,?)');
if($sql->execute([$_POST['name'], $_POST['school_name'], $_POST['style_id']])){
    echo '<div class="txt"><p>登録完了しました。</p></div>';
}else{
    echo '<div class="txt"><p>エラーが発生しました。</p></div>';
}
$pdo = null;
?>
    </div>
     <div class="link"><p><a href="prince-list.php">プレイヤーリストへ</a></p></div>
</div>
</body>
</html>
