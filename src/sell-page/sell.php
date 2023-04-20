<?php

require("../common/php/connection.php");
require_once("../common/php/database.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../common/css/page-style.css">
    <link rel="stylesheet" href="../common/css/header-style.css">
    <link rel="stylesheet" href="../common/css/nav-style.css">
    <link rel="stylesheet" href="./css/main-style.css">
    <link rel="icon" href="../common/imgs/logo.png">

    <link rel="stylesheet" href="../common/css/page-style.css">
    <link rel="stylesheet" href="../common/css/header-style.css">
    <link rel="stylesheet" href="../common/css/nav-style.css">
    <link rel="stylesheet" href="../common/css/form-style.css">
    <!-- <link rel="stylesheet" href="./css/milk-style.css"> -->
    <link rel="icon" href="../common/imgs/logo.png">


</head>

<body>

    <?php
    require_once("../common/php/token-manager.php");
    $page = "sell";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>

    <?php
    $opzione = $_POST['opzione'];
    $sql = "SELECT * FROM tForma WHERE id='$opzione'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $codice = $row['codice'];
            $scelta = $row['scelta'];
            $numero = $row['numeroProgressivo'];
            $dataProduzione = $row['dataProduzione'];
            $idForma = $row['id'];
        }
    }
    ?>

    <br>
    <main>
        <section class="form-section">
            <h3>Inserisci vendita formaggio</h3>
            <div class="form-container">
                <form method="post" action="updatedb.php">
                    <div class="row">
                        <div class="input-container">
                            <input type="text" class="dairy-text" value="<?php echo $codice; ?>" disabled>
                            <input type="hidden" name="idForma" value=" <?php echo $idForma ?>">
                            <span> Codice Forma </span>
                        </div>
                        <div class="input-container">
                            <input type="text" class="current-date" value="<?php echo $scelta; ?>" disabled>
                            <span>Scelta</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-container">
                            <input type="number" class="milk-produced-number" value="<?php echo $numero; ?>" disabled>
                            <span>Numero Progressivo mese</span>
                        </div>
                        <div class="input-container">
                            <input type="date" class="milk-used-number" value="<?php echo $dataProduzione; ?>" disabled>
                            <span>data produzione</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-container">
                            <select id="acquirente-select" class="milk-produced-number" required>
                                <option value="" disabled selected>Seleziona l'acquirente</option>
                                <?php
                                $sql = "SELECT tAcquirente.id, tAcquirente.partitaIva, tAcquirente.nomeAzienda, tTipologiaAcquirente.tipologia 
                                        FROM tAcquirente 
                                        INNER JOIN tTipologiaAcquirente ON tAcquirente.idTipologiaAcquirente = tTipologiaAcquirente.id";
                                $result = $db->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $nome = $row['nomeAzienda'];
                                        $partitaIva = $row['partitaIva'];
                                        $id = $row['id'];
                                        $tipologia = $row['tipologia'];
                                        echo "<option value=\"$partitaIva\" data-partita-iva=\"$partitaIva\" data-tipologia=\"$tipologia\">$nome</option>";
                                    }
                                    // c'è un problema qua 
                                    echo " <input type=\"hidden\" name=\"idAcquirente\" value=\"$id\" >";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="input-container">
                            <input id="partita-iva-input" type="text" class="milk-used-number" disabled>
                            <span>partita IVA</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-container">
                            <input id="tipologia-acquirente-input" type="text" class="milk-produced-number" disabled>
                            <span>Tipologia Acquirente</span>
                        </div>
                        <div class="input-container">
                            <input name="dataVendita" id="tipologia-acquirente-input" type="date" class="milk-produced-number" required>
                            <span>Data Vendita</span>
                        </div>
                    </div>



                    <script>
                        var acquirenteSelect = document.getElementById("acquirente-select");
                        var partitaIvaInput = document.getElementById("partita-iva-input");
                        var tipologiaAcquirenteInput = document.getElementById("tipologia-acquirente-input");

                        acquirenteSelect.addEventListener("change", function() {
                            var selectedOption = acquirenteSelect.options[acquirenteSelect.selectedIndex];
                            var partitaIva = selectedOption.getAttribute("data-partita-iva");
                            var tipologia = selectedOption.getAttribute("data-tipologia");
                            partitaIvaInput.value = partitaIva;
                            tipologiaAcquirenteInput.value = tipologia;
                        });
                    </script>





                    <script>
                        var acquirenteSelect = document.getElementById("acquirente-select");
                        var partitaIvaInput = document.getElementById("partita-iva-input");

                        acquirenteSelect.addEventListener("change", function() {
                            var selectedOption = acquirenteSelect.options[acquirenteSelect.selectedIndex];
                            var partitaIva = selectedOption.getAttribute("data-partita-iva");
                            partitaIvaInput.value = selectedOption.value;
                        });
                    </script>

                    <input type="submit" value="Conferma" class="submit-btn">
                </form>
            </div>

            <h5 class="info-text hide-info">
                Latte aggiunto con successo!
            </h5>
        </section>
    </main>

</body>

</html>