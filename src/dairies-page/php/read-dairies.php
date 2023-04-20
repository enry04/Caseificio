<?php

require("../../common/php/connection.php");

$mySql = new ConnectionMySQL();
$pdo = $mySql->getConnection();

$query = $pdo->query("SELECT *, tCaseificio.id AS dairyId FROM tCaseificio INNER JOIN tFoto ON tFoto.idCaseificio = tCaseificio.id WHERE tFoto.fotoPrincipale = 'si'");
$dataList = $query->fetchAll();
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
