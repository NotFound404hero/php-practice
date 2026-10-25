<!DOCTYPE html>
<html lang="ja">

<head>
    <!--
思考
・ユーザーに名前、メアド、年齢を入力してもらおう
・送信先は確認画面（confirm.php)にしよう
・method="post"でデータを送信しよう-->
    <meta charset="UTF-8">
    <title>ユーザー登録 - 入力</title>
</head>

<body>
    <h1>ユーザー登録(1/3)</h1>
    <form action="confirm.php" method="post">
        <!--action属性で送信先をconfirm.phpに指定。
        method="post"でPOSTメソッドを使用-->
        <p>
            <label>お名前：</label>
            <input type="text" name="name" required>
            <!--name="name"で、PHP側で$_POST["name"]として受け取れる。
            requiredは入力必須を意味する。-->
        </p>
        <p>
            <label>メールアドレス：</label>
            <input type="email" name="email" required>
            <!--type="email"で、メールアドレス形式が正しい形式になっているか自動で確認する。-->
        </p>
        <p>
            <label>年齢：</label>
            <input type="number" name="age" min="0" max="120" required>
            <!--type="number"で数値入力欄になる。minとmaxで入力範囲を制限する。-->
        </p>
        <button type="submit">確認画面へ</button>
    </form>
</body>

</html>