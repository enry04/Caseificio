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
    <!-- <link rel="stylesheet" href="./css/milk-style.css">  -->
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
    $page = "add";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>

    <main>
        <section class="form-section">
            <h3>Aggiungi Nuovo Acquirente</h3>
            <div class="form-container">
                <form method="post" action="updateDB.php">
                    <div class="row">
                        <div class="input-container">
                            <input name="nomeAzienda" type="text" class="dairy-text" required>
                            <span>Nome Azienda</span>
                        </div>
                        <div class="input-container">
                            <input name="partita" type="number" class="current-date" required>
                            <span>Partita IVA</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-container">
                            <select name="tipologia" id="acquirente-select" class="milk-produced-number" required>
                                <option value="" disabled selected>Seleziona Tipologia</option>
                                <?php
                                $sql = "SELECT * From tTipologiaAcquirente";

                                $result = $db->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row

                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $tipologia = $row['tipologia'];
                                        echo "<option value=\"$id\" >$tipologia</option>";
                                    }
                                }
                                ?>



                            </select>
                        </div>


                    </div>

                    <script>
                        function confermaEseguito() {
                            alert("Operazione eseguita con successo!");
                        }
                    </script>

                    <input type="submit" value="Conferma" class="submit-btn">

                </form>
            </div>
            <h5 class="info-text hide-info">
            </h5>
        </section>
    </main>


</body>

</html>