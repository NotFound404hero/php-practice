<?php
//フォームから送信されたデータを受け取る
$name = $_POST["$name"];

//ここでデータベースへの保存などの処理を行う
//(今回は省略)

//処理が完了したら、完了画面にリダイレクト
header("Location: 7-4-2_complete.php");
//↑ブラウザに「complete.phpに移動してください」という指示を送る

//処理が完了したら、名前をURLパラメータを渡してリダイレクト
$encoded_name = urlencode($name);/*urlencode()関数で、
URLに含められない文字（日本語やスペースなど）を、安全な形式に変換*/

header("Location: 7-4-2_complete.php?name=" . $encode_name);
/*header()の後は必ずexitを書かないと
↓リダイレクト後もスクリプトが実行され続けてしまう。*/
exit;
?>