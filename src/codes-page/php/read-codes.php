<?php
require('../../common/php/connection.php');

$connMySQL = new ConnectionMySQL();
$pdo = $connMySQL->getConnection();

$json = file_get_contents('php://input');
$data = json_decode($json);

$dairyId = $data->dairyId;

$query = $pdo->prepare('SELECT *, tForma.id AS cheeseId FROM tForma INNER JOIN tStagionatura ON tForma.idStagionatura = tStagionatura.id WHERE idCaseificio = :dairyId AND codiceStampato = "NO"');
$query->execute(['dairyId' => $dairyId]);
$codesData = $query->fetchAll();
$result = null;

if ($codesData != null) {
    $result = array(
        'data' => $codesData,
        'status' => "success",
    );
} else {
    $result = array(
        'data' => null,
        'status' => "error",
    );
}

echo json_encode($result);
