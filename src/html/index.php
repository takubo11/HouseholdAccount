<?php

print_r('Hello, World!');
$pdo = new PDO('mysql:host=talknote.dev;dbname=household;charset=utf8mb4',
	'root',
	'',
	[
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
$hoge = $pdo->exec('update hoge set hoge = 3');

print_r($hoge);
