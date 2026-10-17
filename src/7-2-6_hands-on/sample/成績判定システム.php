<?php
/*
step1
    学生データを配列で定義する
        連想配列で名前と点数をペアにして管理
step2
    評価判定関数を作る
        if/elseifで点数に応じた評価を返す
step3
    全員の成績をループで処理する
        foreachで配列をループし、統計を集計
step4
    統計情報を表示する
        平均点・合格者数を計算して出力*/

/*学生データの定義
    「複数の学生のデータをまとめて管理したい」
    「連想配列を使って名前と点数をペアにしよう」*/
$students = [
    ["name" => "豊田章雄", "score" => 85],
    ["name" => "本田翼", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "川崎宗則", "score" => 65],
    ["name" => "大塚明夫", "score" => 58],
];

/*評価判定関数を作る
    「点数を受け取って評価を返す関数を作ろう」
    「if文で点数の範囲を判定しよう」
    「高い点数から順番に判定するとシンプル」
評価判定関数*/
function getGrade($score)
{
    if ($score >= 90) {
        return "A";
    } elseif ($score >= 80) {
        return "B";
    } elseif ($score >= 70) {
        return "C";
    } elseif ($score >= 60) {
        return "D";
    } else {
        return "F";
    }
}

/*全員の成績をループで処理する
    foreachで配列をループしよう」
    「各学生の点数を取得して評価を判定しよう」
    「結果を表示しながら、統計情報も集計しよう」
統計情報の初期化*/
$pass_count = 0;
$fail_count = 0;
$total_score = 0;

echo "<h2>成績判定システム</h2>";
echo "<h3> 【個別成績】</h3>";

//学生の成績を処理
foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"];
    $grade = getGrade($score);

    //合格・不合格のカウント
    if ($score >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }

    //合計点の集計
    $total_score += $score;

    //結果の表示
    echo "{$name}: {$score}点 - 評価<strong>{$grade}</strong><br>";
}

/*統計情報を表示する
平均点を計算しよう：合計点÷人数」
「統計情報を見やすく表示しよう」*/
//平均点の計算
$average = $total_score / count($students);

echo "<h3>【統計情報】</h3>";
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";
echo "平均点: " . number_format($average, 1) . "点<br>";
?>