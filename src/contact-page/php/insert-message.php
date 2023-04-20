<?php

require("../../common/php/connection.php");

$connection = new ConnectionMySQL();
$pdo = $connection->getConnection();

$json = file_get_contents("php://input");
$data = json_decode($json);

$email = $data->email;
$message = $data->message;
$receiver = $data->receiver;
$result = null;

try {

    $query = $pdo->prepare("INSERT INTO tMessaggio (email,messaggio,destinatario) VALUES (:email,:message,:receiver)");
    $query->execute(["email" => $email, "message" => $message, "receiver" => $receiver]);
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
