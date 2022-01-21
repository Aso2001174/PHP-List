<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prince-insert</title>
    <link rel="stylesheet" href="./css/insert.css">
</head>
<body>
<div class="container">
    <div class="content">
        <div class="icon"><img src="img/ロゴ.png" width="250px" height="250px"></div>
<form action="prince-insert-result.php" method="post">
    <span class="name"><p>名前</p></span>
    <label class="effect">
    <input class="box" type="text" name="name"><br>
    </label>
    <span class="school_name"><p>学校名</p></span>
    <label class="effect">
    <input class="box" type="text" name="school_name"><br>
    </label>
    <span class="style_name"><p>プレイスタイル</p></span>
    <select class="select_box" name="style_id">
            <option value="1">オールラウンダー</option>
            <option value="2">カウンターパンチャー</option>
            <option value="3">サーブ＆ボレーヤー</option>
            <option value="4">アグレッシブ・ベースライナー</option>
    </select><br>
    <p><input class="btn" type="submit" value="登録"></p>
</form>
    </div>
</div>
</body>
</html>
