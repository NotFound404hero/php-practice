<?php
$students = [
    ["name" => "太田裕雄", "score" => 85],
    ["name" => "リサスー", "score" => 92],
    ["name" => "サムアルトマン", "score" => 78],
    ["name" => "ジェンスンファン", "score" => 65],
    ["name" => "スンダーピチャイ", "score" => 58],
];
//配列のループ
foreach ($students as $student) {
    echo $student["name"];
    echo $student["score"];
}
//if-elseif-else文
if ($score >= 90) {
    $grade = "A";
    $status = "優秀";
} elseif ($score >= 80) {
    $grade = "B";
    $status = "良好";
} else {
    $grade = "F";
    $status = "不合格";
}
//カウンター変数
$pass_count = 0;
$fail_count = 0;

foreach ($students as $student) {
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
}

$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($student);

echo "成績判定システム<br>";

echo "【個別成績】<br>";

echo "【統計情報】<br>";