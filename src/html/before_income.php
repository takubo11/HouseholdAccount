<?php
require_once "../dao/dataDao.php";

$dao = new DataDao();
$pdo = $dao->getPdoInstance();
$stmt = $pdo->query('select * from income order by id asc');
$items = $stmt->execute();

session_start();

$_SESSION['items'] = $items;

require("income.php");