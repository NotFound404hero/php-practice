<?php
$fruits = ['りんご', 'バナナ'];
echo $fruits[1]; // "りんご”(インデックスは０から始まる)

$user = ['name' => '山田', 'age' => 30];
echo $user['name'];  // "山田”

//末尾に要素を追加
$fruits[] = 'みかん';
$fruits[] = '海ぶどう';

print_r($fruits);

$user = [
    'name' => '山田 太郎'
];

$user['age'] = 30;
$user['email'] = 'yamada@example.com';

print_r($user);

unset($fruits[0]);
print_r($fruits);
$fruits = array_values($fruits);

print_r($fruits);

$user = ['name' => '山田', 'age' => 30];
print_r($user);

$user = ['name' => '山田', 'age' => 30];
var_dump($user);
echo count($fruits);
if (in_array('バナナ', $fruits)) {
    echo 'バナナがあります！';
}
array_push($fruits, 'みかん', 'ぶどう');
print_r($fruits);

$fruits1 = ['りんご', 'バナナ'];
$fruits2 = ['みかん', 'ぶどう'];
$all_fruits = array_merge($fruits1, $fruits2);
print_r($all_fruits);

$user = ['name' => '山田', 'age' => 30];
if (array_key_exists('email', $user)) {
    echo 'メールアドレスがあります';
} else {
    echo 'メールアドレスがありません';
}

$users = [
    ['name' => '山田', 'age' => 30],
    ['name' => '佐藤', 'age' => 25],
    ['name' => '鈴木', 'age' => 35],
];

foreach ($users as $user) {
    echo '名前: ' . $user['name'] . '、年齢' . $user['age'] . '歳<br>';
}

$scores = [
    '国語' => 80,
    '数学' => 95,
    '英語' => 72,
];
foreach ($scores as $subject => $score) {
    echo $subject . ': ' . $score . '点<br>';
}