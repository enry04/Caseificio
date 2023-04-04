<?php

require("../common/php/connection.php");
require_once("../common/php/database.php");

$idAcquirente = $_POST['idAcquirente'];
$idForma = $_POST['idForma'];
$dataVendita = $_POST['dataVendita'];

$sql = "INSERT INTO tVendita (idForma, idAcquirente, dataVendita)
VALUES ('$idForma', '$idAcquirente', '$dataVendita')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
    $sql = "UPDATE tForma SET stato='N' WHERE id=$idForma";

    if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $db->error;
    }
    header("Location: choose-form.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
