<?php
//　process.php (安全なバージョン)

// データを受け取る
$username = $_POST["username"];

//htmlspecialchars()で、エスケープ処理を行う
$safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
echo "こんにちは、" . $safe_username . "さん！";
