<?php
$name = $_POST["name"] ?? '';
$email = $_POST["email"] ?? '';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録(3/3)完了</title>
</head>

<body>
    <h1>ユーザー登録(3/3)完了</h1>
    <p><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！</p>
    <p>確認メールを<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>に送信しました。</p>
    <p><a href="input.php">入力画面に戻る</a></p>
</body>

</html>