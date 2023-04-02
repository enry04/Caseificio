<?php

require("../../common/php/connection.php");

$mySql = new ConnectionMySQL();
$pdo = $mySql->getConnection();

$query = $pdo->query("SELECT COUNT(*) AS totale FROM tForma WHERE DAY(dataProduzione) = DAY(NOW()) AND stato = 'V'");
$dataList = $query->fetch();
$result = null;

if ($dataList != null) {
    $result = array(
        "data" => json_encode($dataList),
        "status" => "success",
    );
} else {
    $result = array(
        "data" => null,
        "status" => "error",
    );
}

echo json_encode($result);
