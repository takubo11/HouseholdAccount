<?php
require_once "../dao/dataDao.php";

$dao = new DataDao();
$pdo = $dao->getPdoInstance();
$items = $pdo->query('select * from income order by id asc');

session_start();

$_SESSION['items'] = $items;

require("income.php");