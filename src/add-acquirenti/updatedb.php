<?php
require("../common/php/connection.php");
require_once("../common/php/database.php");

$tipologia = $_POST['tipologia'];
$partita = $_POST['partita'];
$nomeAzienda = $_POST['nomeAzienda'];

$sql = "INSERT INTO tAcquirente (partitaIva, idTipologiaAcquirente, nomeAzienda)
VALUES ('$partita', '$tipologia', '$nomeAzienda')";

if ($db->query($sql) === TRUE) {
    echo "<script>setTimeout(() => { alert('Record aggiornato con successo'); }, 2000);</script>";
    header("Refresh: 2; URL=add-acquirenti.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
    header("Location: add-acquirenti.php");
}
