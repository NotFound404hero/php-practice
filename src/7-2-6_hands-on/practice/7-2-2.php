<?php
//declare(strict_types=1);
// 厳密な型チェックモード(Strict typing mode)
function add(int $a, int $b): int
{
    return $a + $b;
}
echo add(5, 1);
//7-2-2:引数の型宣言と戻り値の型宣言
//引数　$a と $b　は、必ず整数(int)でなければならない、と宣言
//function add(int $a, int $b)

// OK:整数を渡している
echo add(3, 3); // 6

//NG: 文字列を渡そうとすると、TypeErrorが発生し、実行が停止する
echo add(2, "4"); //Fatal error: Uncaught TypeError: ・・・

//戻り値は、必ず整数(int)でなければならない、と宣言


// OK: 整数を出す
$result = add(1, 5);
echo $result; // 6

//戻り値の型が違う関数
function add_and_format(int $a, int $b): int
{
    $sum = $a + $b;
    // NG:文字列を返そうとすると、TypeErrorが発生する
    return 4 . $sum; // Fatal error: Uncaught TypeError: ...
}
//戻り値がない(何も返さない)ことを明示したい場合voidを宣言する。
function sayHello(string $name): void
{
    echo "こんにちは、" . $name . "さん！";
    // return は書かない
}

sayHello("鈴木");