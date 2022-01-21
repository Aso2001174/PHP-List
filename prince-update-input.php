<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-update-input</title>
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
$sql=$pdo->prepare('select * from prince inner join playstyle on prince.style_id = playstyle.style_id and id = ?');
$sql->execute([$_POST['id']]);
foreach($sql as $row) {
    echo '<form action="prince-update-result.php" method="post">';
    echo '<label class="effect"><p><input class="box" type="text" name="id" value="', $row['id'], '"readonly="readonly"></p></label><br>';
    echo '<label class="effect"><p><input class="box" type="text" name="name" value="', $row['name'], '"></p></label><br>';
    echo '<label class="effect"><p><input class="box" type="text" name="school_name" value="', $row['school_name'], '"></p></label><br>';
    echo '<p><select class="select_box" name="style_id">';
    echo '<option value="',$row['style_id'],'">',$row['style_name'],'</option>';
    echo '<option value="1">オールラウンダー</option>';
    echo '<option value="2">カウンターパンチャー</option>';
    echo '<option value="3">サーブ＆ボレーヤー</option>';
    echo '<option value="4">アグレッシブ・ベースライナー</option>';
    echo '</select></p><br>';
    echo '<p><input class="btn" type="submit" value="更新"></p>';
    echo '</form>';
}
?>
    </div>
</div>
</body>
</html>
