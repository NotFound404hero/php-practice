<?php

class user
{
    public string $name;
    public int $age;

    //コンストラクタを定義
    public function __construct(string $name, int $age)
    {
        echo "Userインスタンスが生成されました!<br>";
        //引数で受け取った値を、プロパティに設定する
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string
    {
        return "こんにちは、私の名前は" . $this->name . "です。年齢は" . $this->age . "歳です。";
    }
}
/*コンストラクタを使ったインスタンス生成
newする前に、コンストラクタの引数を渡す*/
$user1 = new User("山田 太郎", 30);
//"Userインスタンスが生成されました！"が出力される

// インスタンス生成と同時に、プロパティが初期化されている
echo $user1->introduce(); // "こんにちは、私の名前は山田 太郎です。年齢は30歳です。"
/*
プロパティへの個別の代入が不要になり、コードが簡潔になった
$user1->name = "山田 太郎"; // ← この行が不要
$user1->age = 30; // ←この行が不要
*/
