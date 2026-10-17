<?php

echo "成績判定システム<br>";
echo "【個別成績】<br>";

$students = [
    ["name" => "太田裕雄", "score" => 85],
    ["name" => "リサ・スー", "score" => 92],
    ["name" => "サム・アルトマン", "score" => 78],
    ["name" => "ジェンスン・ファン", "score" => 65],
    ["name" => "サンダー・ピチャイ", "score" => 58],
];
//配列のループ
foreach ($students as $student) {
    $score = $student["score"];

    if ($score >= 90) {
        $grade = "A";
        $status = "優秀";
    } elseif ($score >= 80) {
        $grade = "B";
        $status = "良好";

    } else {
        $grade = 'F';
        $status = '不合格';
    }

    echo $student["name"] . " " . $score . "点・" . $status . "<br>";

}

echo "【統計情報】<br>";
/* 合格者数4人
    不合格者数1人
    平均点75.6点　*/

//カウンター変数
$pass_count = 0;
$fail_count = 0;

foreach ($students as $student) {
    if ($student["score"] >= 80) {
        $pass_count++; // 合格者数を増やす
    } else {
        $fail_count++; // 不合格者数を増やす
    }
}
// ループ終了後に結果を表示させる。
echo "合格者数" . $pass_count . "人" . "<br>";
echo "不合格者数" . $fail_count . "人" . "<br>";


//平均点の計算

$total_score = 0;
foreach ($students as $student) {
    if (isset($student['score'])) {
        $total_score += $student['score'];
    }
}
$average = $total_score / count($students);
echo "平均点" . $average . "点<br>";