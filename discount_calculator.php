<?php
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "元の価格：" . $original_price . "円<br>";
echo "割引率" . ($discount_rate * 100) . "%<br>";
echo "割引価格:" . ($final_price) . "円<br>";
?>