<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>処理結果</title>
</head>

<body>
    <h1>ユーザー登録(2/3)確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>
    <p>お名前：<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>メールアドレス： <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>ご年齢： <?php echo htmlspecialchars($age ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
    </form>
    <p>
    <form action="complete.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>
    </form>
    </p>
</body>

</html>