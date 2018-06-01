<?php

print_r('Hello, World!');
$pdo = new PDO('mysql:host=talknote.dev;dbname=household;charset=utf8mb4',
	'root',
	'',
	[
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
//$stmt = $pdo->query('SELECT hoge FROM hoge');
//$hoge = $pdo->exec('SELECT hoge FROM hoge');
$hoge = $pdo->exec('update hoge set hoge = 3');

print_r($hoge);
