<?php

require("../../common/php/connection.php");

$mySql = new ConnectionMySQL();
$pdo = $mySql->getConnection();

$json = file_get_contents('php://input');
$data = json_decode($json);

$dairyId = $data->dairyId;

$query = $pdo->prepare("SELECT COUNT(*) AS totale FROM tForma INNER JOIN tVendita ON tVendita.idForma = tForma.id WHERE DAY(dataVendita) = DAY(NOW()) AND idCaseificio = :dairyId AND stato = 'N'");
$query->execute(['dairyId' => $dairyId]);
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
