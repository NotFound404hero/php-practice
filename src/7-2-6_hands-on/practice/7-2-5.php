<?php
$fruits = ['りんご', 'バナナ'];
echo $fruits[1]; // "りんご”(インデックスは０から始まる)

$user = ['name' => '山田', 'age' => 30];
echo $user['name']; // "山田”

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

unset($fruits[1]);
print_r($fruits);
$fruits = array_values($fruits);

print_r($fruits);