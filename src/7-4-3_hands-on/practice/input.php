<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録入力</title>
</head>

<body>
    <h1>ユーザー登録(1/3) 入力</h1>
    <form action="confirm.php" method="post">
        <p>
            <label>お名前：</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>メールアドレス：</label>
            <input type="email" name="email">
        </p>
        <p>
            <label>ご年齢：</label>
            <input type="text" name="age">
        </p>

        <button type="submit">確認画面へ</button>
    </form>
</body>

</html>