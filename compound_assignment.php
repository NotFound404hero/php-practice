<?php
$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50; //ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30; //ダメージ
echo "ダメージ後：{$score}点<br>";

$score *= 2; //2倍アイテム
echo "最終スコア: {$score}点<br>";