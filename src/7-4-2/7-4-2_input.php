<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>入力画面</title>
</head>

<body>
    <h1>ユーザー情報入力</h1>
    <form action="7-4-2_process.php" method="post">
        <!-- action属性で、データの送信先を指定 -->
        <p>
            <label>お名前：</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>メールアドレス：</label>
            <input type="email" name="email">
        </p>
        <button type="submit">送信</button>
    </form>
</body>

</html>