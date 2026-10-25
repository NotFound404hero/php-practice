<?php
/*
思考
・入力画面から＄＿POSTでデータを受け取ろう
・受け取ったデータを表示して、ユーザーに確認してもらおう
・完了画面にhiddenフィールドを使ってデータを渡そう
・XSS対策にhtmlspecialcharsを使おう
*/
//入力データを受け取る
$name = $_POST["name"];//入力されたデータを$_POSTで受け取る
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録 - 確認</title>
</head>

<body>
    <h1>ユーザー登録 (2/3) 確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>

    <table boreder="1">
        <tr>
            <th>お名前</th>
            <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
            <!--htmlspecialcharsでXSS対策。ユーザー入力を表示する際は必ず使用する。-->
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>歳</td>
        </tr>
    </table>
    <!-- 確認画面から完了画面へデータを渡すためのフォーム-->
    <form action="complete.php" method="post">
        <!-- hidden属性で、データを隠して送信 -->
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <!--type="hidden"で隠しフィールドを作成。画面で非表示だが、フォーム送信時にデータが送られる。
        これで確認画面から完了画面へデータを渡せる。-->
        <p>
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">登録する</button>
            <!-- type="button"でフォーム送信を防ぎ、history.backで前のページに戻る-->
        </p>
    </form>
</body>

</html>