<?php

require("../../common/php/connection.php");

$connection = new ConnectionMySQL();
$pdo = $connection->getConnection();

$json = file_get_contents("php://input");
$data = json_decode($json);

$seasoningId = $data->seasoningId;
$dairyId = $data->dairyId;
$code = $data->code;
$sequentialNumber = $data->sequentialNumber;
$date = $data->date;
$typology = $data->typology;
$result = null;

try {

    $query = $pdo->prepare('INSERT INTO tForma (idStagionatura,idCaseificio,codice,numeroProgressivo,dataProduzione,scelta,stato,codiceStampato) VALUES (:seasoningId, :dairyId, :code, :sequentialNumber, :date, :typology, "S", "NO")');
    $query->execute(['seasoningId' => $seasoningId, 'dairyId' => $dairyId, 'code' => $code, 'sequentialNumber' => $sequentialNumber, 'date' => $date, 'typology' => $typology]);
    $result = array(
        'data' => null,
        'status' => "success",
    );
} catch (PDOException $e) {
    $result = array(
        'data' => $e,
        'status' => "error",
    );
}

echo json_encode($result);
