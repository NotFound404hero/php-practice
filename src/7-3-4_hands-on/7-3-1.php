<?php
/*
クラスの定義
Userという名前のクラスを定義する
*/
class User
{
    //この中に、プロパティ(データ)とメソッド(処理)を定義していく
}

/*
インスタンスの生成
クラスからインスタンスを生成するにはnewキーワードを使う
*/

//Userクラスの設計図から、2つのインスタンス(実体)を生成する
$user1 = new User();
$User2 = new User();

// var_dump()で、インスタンスの中身を見てみる
var_dump($user1);
// object(User)#1 (0) {}

var_dump($user2);
// object(User)#2 (0) {}