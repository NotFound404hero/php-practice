<?php
//フォームから送信されたデータを受け取る
$name = $_POST["name"] ?? '';
$email = $_POST["email"] ?? '';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>処理結果</title>
</head>

<body>
    <h1>入力内容</h1>
    <p>お名前：<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>メールアドレス：<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
</body>

</html>