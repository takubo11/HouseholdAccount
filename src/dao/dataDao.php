<?php

Class DataDao {
	private $pdo;

	public function __construct() {
		$this->pdo = new PDO('mysql:host=talknote.dev;dbname=household;charset=utf8mb4',
			'root',
			'',
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			]);
	}

	public function getPdoInstance(){
		return $this->pdo;
	}
}