<?php
$page_title = "ホーム";/*includeの前に変数を定義しておくと、
読み込まれるファイル内でその変数を使用できる。*/
include "7-4-2_header.php";/*header.phpの内容が、この位置に挿入される。*/
?>

<main>
    <h1>ようこそ</h1>
    <p>これはサンプルサイトです。</p>
</main>
<?php include "7-4-2_footer.php"; ?>