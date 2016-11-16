<?php

if(isset($_GET['id'])){
  $pid = $_GET['id'];
}

$pdo = require __DIR__."/../odbc.pdo.php";

$sql = "SELECT * FROM [ISYS4283].[dbo].[products] WHERE id = :id";

$smt = $pdo->prepare($sql);

$smt->execute([
  "id" => $pid,
]);

$res = $smt->fetchAll();

//$res = $pdo->query($sql)->fetchAll();

$json = json_encode($res, JSON_PRETTY_PRINT);

echo $json;
