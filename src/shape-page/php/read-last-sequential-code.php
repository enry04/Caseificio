<?php
require('../../common/php/connection.php');

$connMySQL = new ConnectionMySQL();
$pdo = $connMySQL->getConnection();

$json = file_get_contents('php://input');
$data = json_decode($json);

$dairyId = $data->dairyId;
$date = $data->date;

$query = $pdo->prepare('SELECT MAX(numeroProgressivo) AS max FROM tForma WHERE idCaseificio=:dairyId AND YEAR(dataProduzione)=YEAR(:date) AND MONTH(dataProduzione)=MONTH(:date)');
$query->execute(['dairyId' => $dairyId, 'date' => $date]);
$cheeseData = $query->fetch();
$result = null;

if ($cheeseData != null) {
    $result = array(
        'data' => $cheeseData,
        'status' => "success",
    );
} else {
    $result = array(
        'data' => null,
        'status' => "error",
    );
}

echo json_encode($result);
