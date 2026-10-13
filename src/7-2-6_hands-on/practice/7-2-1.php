<?php
//7-2-1:関数の基礎
//関数の定義
function sayHelloTo($name)
{
    echo "こんにちは、" . $name . "さん！";
}

//関数の呼び出し
sayHelloTo("山田");// "こんにちは山田さん！"が出力される
sayHelloTo("佐藤");// "こんにちは佐藤さん！"が出力される

//2つの数値を受け取り、その合計を返す関数
function add($a, $b)
{
    $sum = $a + $b;
    return $sum;//計算結果を返す
}

//関数の戻り値を、変数　＄result に代入する
$result = add(3, 5);

echo $result; // "８" が出力される

echo add(10, 20); // "30" が出力される

function testReturn()
{
    return "ここで処理は終わり";
    echo "この行は実行されません";
}

echo testReturn();