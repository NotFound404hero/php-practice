<?php
$name = isset($_GET["name"]) ? $_GET["name"] : "ゲスト";
/*isset()で、パラメータが存在するかチェックする。
存在しない場合は「ゲスト」をデフォルト値として使用します。*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>完了</title>
</head>

<body>
    <h1><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました</h1>
    <p><a href="7-4-2_input.php">入力画面に戻る</a></p>
</body>

</html>