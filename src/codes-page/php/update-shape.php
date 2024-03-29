<?php

require("../../common/php/connection.php");

$connection = new ConnectionMySQL();
$pdo = $connection->getConnection();

$json = file_get_contents("php://input");
$data = json_decode($json);

$shapeId = $data->shapeId;
$result = null;

try {

    $query = $pdo->prepare('UPDATE tForma SET codiceStampato="SI" WHERE id=:shapeId');
    $query->execute(['shapeId' => $shapeId]);
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
