<?php
/*
思考
・確認画面から$_POSTでデータを受け取ろう
・実際のアプリケーションではここでデータベースに保存する
・登録完了のメッセージを表示しよう
確認画面から送信されたデータを受け取る
*/
$name = $_POST["name"]; //確認画面の隠しフィールドからデータを受け取る
$email = $_POST["email"];
$age = $_POST["age"];
//ここでデータベースへの保存などの処理を行う
//(今回は省略)
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 - 完了</title>
</head>

<body>
    <h1>ユーザー登録 (3/3) - 完了</h1>
    <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！</p>
    <p>確認メールを<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>に送信しました。</p>
    <p><a href="input.php">最初に戻る</a></p>
    <!--通常のリンクで入力画面に戻れるようにする-->
</body>

</html>