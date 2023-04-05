<?php

require("../../common/php/connection.php");

$mySql = new ConnectionMySQL();
$pdo = $mySql->getConnection();

$query = $pdo->query("SELECT COUNT(*) AS totale FROM tForma INNER JOIN tVendita ON tVendita.idForma = tForma.id WHERE DAY(dataVendita) = DAY(NOW()) AND stato = 'N'");
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
