<?php
$age = 15;
if ($age >= 18) { //if文: もし〜ならば
    echo "あなたは、成人です。";
} else { //else: そうでなければ
    echo "あなたは、未成年です。";
}

$score = 85;

if ($score >= 90) {
    echo "評価はAです。";
} elseif ($score >= 80) { //elseif: もし〜でなく、もし〜ならば
    echo "評価はBです。";
} elseif ($score >= 60) {
    echo "評価はCです。";
} else {
    echo "評価はDです（不合格）。";
}
//出力：評価はBです。

$signal = "red";

switch ($signal) {
    case "red":
        echo "止まれ";
        break; // breakは入力必須

    case "yellow";
        echo "注意";
        break;

    case "blue";
        echo "進め";
        break;

    default: // どのケースにも当てはまらない場合
        echo "信号の色ではありません";
        break;

}