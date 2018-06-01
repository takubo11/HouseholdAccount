<?php

Class Dao {
	private $pdo;

	function __construct() {
		//todo 設定値を外出しにしたい。
		if(!empty($this->pdo)) {
			return $this->pdo;
		}

		$this->pdo = new PDO('mysql:host=talknote.dev;dbname=household;charset=utf8mb4',
			'root',
			'',
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			]);

		return $this->pdo;
	}

	public function getInstance(){
		return $this->pdo;
	}
}
