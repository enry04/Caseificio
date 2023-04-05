<?php

require("../../common/php/connection.php");

$connection = new ConnectionMySQL();
$pdo = $connection->getConnection();

$json = file_get_contents("php://input");
$data = json_decode($json);

$dairyId = $data->dairyId;
$title = $data->title;
$holder = $data->holder;
$description = $data->description;
$result = null;

try {

    $query = $pdo->prepare("UPDATE tCaseificio SET nome = :title, nomeTitolare = :holder, descrizione = :description WHERE id = :dairyId");
    $query->execute(['dairyId' => $dairyId, 'title' => $title, 'holder' => $holder, 'description' => $description]);
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
