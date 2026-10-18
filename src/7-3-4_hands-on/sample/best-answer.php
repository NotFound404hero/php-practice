<?php
// Userクラスの定義
class User
{
    public $name;
    public $age;

    // コンストラクタ
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // 自己紹介メソッド
    public function introduce()
    {
        echo "<div class='user-info'>";
        echo "こんにちは、私は{$this->name}です。{$this->age}歳です。";
        echo "</div>";
    }

    // 成人判定メソッド
    public function isAdult()
    {
        return $this->age >= 18;
    }
}

// ユーザーを作成
$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

// 自己紹介
echo "<h2>自己紹介</h2>";
$user1->introduce();
$user2->introduce();
$user3->introduce();

// 成人判定
echo "<h2>成人判定</h2>";

$users = [$user1, $user2, $user3];
foreach ($users as $user) {
    if ($user->isAdult()) {
        echo "<p class='adult'>✓ {$user->name}さんは成人です。</p>";
    } else {
        echo "<p class='minor'>✗ {$user->name}さんは未成年です。</p>";
    }
}
?>