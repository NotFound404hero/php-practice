<?php
date_default_timezone_set('Asia/Tokyo');

echo "<h1>Hello from Docker!</h1>";
echo "<p>PHPが正常に作動しています。</p>";
echo "<p>PHPバージョン: " . phpversion() . "</p>";
echo "<p>現在時刻: " . date("Y-m-d H:i:s") . "</p>";
echo "<p style='color: blue;'>ファイルを編集しました！</p>";
?>