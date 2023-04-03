<?php
require('../../common/php/connection.php');

$connMySQL = new ConnectionMySQL();
$pdo = $connMySQL->getConnection();

$json = file_get_contents('php://input');
$data = json_decode($json);

$dairyId = $data->dairyId;

$query = $pdo->prepare('SELECT SUM(litriImpiegati) AS totale FROM tLatte WHERE idCaseificio = :dairyId AND DAY(data) = DAY(NOW())');
$query->execute(['dairyId' => $dairyId]);
$dairyData = $query->fetchAll();
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
