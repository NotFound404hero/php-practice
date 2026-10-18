<h1> ユーザー管理プログラム </h1>
<h2>自己紹介</h2>
<?php
class user
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce()
    {
        return "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }
    public function isAdult()
    {
        return $this->age >= 18;
    }
}

$users = [
    ["name" => "田中 太郎", "age" => 25],
    ["name" => "佐藤 花子", "age" => 17],
    ["name" => "鈴木 一郎", "age" => 30],
];

$user1 = new User("田中 太郎", 25);
$user2 = new User("佐藤 花子", 17);
$user3 = new User("鈴木 一郎", 30);
echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();
?>

<h2>成人判定</h2>
<?php
foreach ($users as $data) {
    $user = new User($data["name"], $data["age"]);
    if ($user->isAdult()) {
        echo $user->name . "さんは成人です。<br>";
    } else {
        echo $user->name . "さんは未成年です。<br>";
    }
}
?>