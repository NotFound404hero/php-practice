<?php
$product_name = "ノートパソコン";
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
$quantity = 2;
$tax_rate = 0.1;
$subtotal = $final_price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$age = 65;
$is_member = true;
$is_student = false;
$total = $subtotal + $tax_amount;

echo "<div class='line'>商品名: {$product_name}</div>";
echo "<div class='line'>定価: {$original_price} 円</div>";
echo "<div class='line'>割引率: " . ($discount_rate * 100) . "% </div>";
echo "<div class='line'>単価： {$final_price} 円 <br>";
echo "数量：$quantity 個 <br>";
echo "消費税(10%)：$tax_amount 円 <br>";
echo "<strong>合計金額：$total 円</strong><br>";
$number = 6;
if ($number % 2 == 0) {
    echo "{$number} は偶数です";
} else {
    echo "{$number} は奇数です";
}
// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

// 条件2: 65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}
$score = 100;
echo "初期スコア: {$score}点<br>";
$score += 50;
echo "ボーナス後: {$score}点<br>";
$score -= 50;
echo "ダメージ後 {$score}点<br>";
$score *= 3;
echo "最終スコア: {$score}点<br>";