<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-update-result</title>
    <link rel="stylesheet" href="./css/update2.css">
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

$sql=$pdo->prepare('UPDATE prince SET name = ?, school_name = ?, style_id = ? WHERE id = ?');
if(empty($_POST['name'])){
    echo '<div class="txt"><p>名前を入力してください。</p></div>';
}else if(empty($_POST['school_name'])){
    echo '<div class="txt"><p>学校名を入力してください。</p></div>';
}else if(empty($_POST['style_id'])){
    echo '<div class="txt"><p>プレイスタイルを選択してください。</p></div>';
}else if($sql->execute(
    [$_POST['name'], $_POST['school_name'], $_POST['style_id'], $_POST['id']]
)){
    echo '<div class="txt"><p>更新完了しました。</p></div>';
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
