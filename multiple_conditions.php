<?php // 複数条件の判定
$age = 66;
$is_member = true;
$is_student = false;

// 条件１：18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

// 条件２：65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}
