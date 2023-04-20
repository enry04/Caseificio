<?php
require('../../common/php/connection.php');

$connMySQL = new ConnectionMySQL();
$pdo = $connMySQL->getConnection();

$json = file_get_contents('php://input');
$data = json_decode($json);

$dairyId = $data->dairyId;
$province = $data->province;

$query = $pdo->prepare('SELECT SUM(litriRaccolti) / 365 AS totale FROM tLatte INNER JOIN tCaseificio ON tLatte.idCaseificio = tCaseificio.id WHERE idCaseificio = :dairyId AND YEAR(data) = YEAR(NOW()) AND tCaseificio.provincia = :province');
$query->execute(['dairyId' => $dairyId, 'province' => $province]);
$dairyData = $query->fetch();
$result = null;

if ($dairyData != null) {
    $result = array(
        'data' => $dairyData,
        'status' => "success",
    );
} else {
    $result = array(
        'data' => null,
        'status' => "error",
    );
}

echo json_encode($result);
