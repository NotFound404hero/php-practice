<?php
class user
{
    // プロパティ(データ)を定義
    public string $name;
    public int $age;

    // メソッド(処理)を定義
    public function introduce(): string
    {
        //自己紹介文を生成して返す
        return "こんにちは、私の名前は" . $this->name . "です。年齢は" . $this->age . "歳です。";
    }
}
// Userクラスのインスタンスを生成
$user1 = new User();

// インスタンスのプロパティに、値を設定する
$user1->name = "山田 太郎";
$user1->age = 30;

//インスタンスのプロパティにアクセスして、値を取得する
echo $user1->name; // "山田太郎"が出力される

//インスタンスのメソッドを呼び出す
$message = $user1->introduce();
echo $message; // "こんにちは、私の名前は山田太郎です。年齢は30歳です。

// 別のインスタンスを生成
$user2 = new User();
$user2->name = "佐藤 花子";
$user2->age = 25;
echo $user2->introduce(); // "こんにちは、私の名前は佐藤 花子です。年齢は25歳です。" が出力される。
