<?php

require("../../common/php/connection.php");

$mySql = new ConnectionMySQL();
$pdo = $mySql->getConnection();

$json = file_get_contents('php://input');
$data = json_decode($json);

$dairyId = $data->dairyId;
$firstDate = $data->firstDate;
$secondDate = $data->secondDate;

$query = $pdo->prepare("SELECT COUNT(*) AS totale FROM tForma WHERE idCaseificio = :dairyId AND dataProduzione BETWEEN :firstDate AND :secondDate");
$query->execute(['dairyId' => $dairyId, 'firstDate' => $firstDate, 'secondDate' => $secondDate]);
$data = $query->fetch();
$result = null;

if ($data != null) {
    $result = array(
        "data" => $data,
        "status" => "success",
    );
} else {
    $result = array(
        "data" => null,
        "status" => "error",
    );
}

echo json_encode($result);
