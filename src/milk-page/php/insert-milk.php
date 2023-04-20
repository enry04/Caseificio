<?php

require("../../common/php/connection.php");

$connection = new ConnectionMySQL();
$pdo = $connection->getConnection();

$json = file_get_contents("php://input");
$data = json_decode($json);

$dairyId = $data->dairyId;
$milkProduced = $data->milkProduced;
$milkUsed = $data->milkUsed;
$date = $data->date;
$result = null;

try {

    $query = $pdo->prepare("INSERT INTO tLatte (litriRaccolti, litriImpiegati, data, idCaseificio) VALUES (:milkProduced, :milkUsed, :date, :dairyId)");
    $query->execute(["milkProduced" => $milkProduced, "milkUsed" => $milkUsed, "date" => $date, "dairyId" => $dairyId]);
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
