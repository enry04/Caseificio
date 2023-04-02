<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caseificio</title>
    <link rel="stylesheet" href="../common/css/page-style.css">
    <link rel="stylesheet" href="../common/css/header-style.css">
    <link rel="stylesheet" href="../common/css/nav-style.css">
    <link rel="stylesheet" href="./css/main-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "main";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section class="main-section">
            <?php
            if (TokenManager::isAuthenticated()) {
                if ($_COOKIE['user_type'] == 'caseificio') {
            ?>
                    <h1 class="title-text">Benvenuto nell' area riservata <br> del caseificio!</h1>
                    <input type="button" class="main-btn operations-btn" value="Operazioni">
                <?php
                }
                ?>
            <?php
            } else {
            ?>
                <h1 class="title-text">I migliori caseifici di <br> tutta Italia</h1>
                <input type="button" class="main-btn explore-btn" value="Esplora">
            <?php
            }
            ?>
        </section>
        <section class="secondary-section">
            <div class="title-container">
                <h2>Sito costantemente aggiornato <br> 24 ore su 24!</h2>
                <h5>La quantità di latte raccolto e usato per la creazione<br> di formaggio viene aggiunto ogni giorno!</h5>
            </div>
            <div class="cards-container">
                <div class="row">
                    <div class="card">
                        <header class="card-header">
                            <div class="milk-logo-container"></div>
                            <h3>Il latte raccolto</h3>
                        </header>
                        <h5>Nella giornata di oggi sono stati raccolti <span class="quantity-milk"></span> litri di latte di ottima qualità in ogni caseificio. </h5>
                    </div>
                    <div class="card">
                        <header class="card-header">
                            <div class="milk-logo-container"></div>
                            <h3>Il latte impiegato</h3>
                        </header>
                        <h5>Nella giornata di oggi sono stati utilizzati <span class="used-milk"></span> litri di latte di ottima qualità per produrre un formaggio unico in tutta Italia! </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <header class="card-header">
                            <div class="cheese-logo-container"></div>
                            <h3>Il formaggio prodotto</h3>
                        </header>
                        <h5>Nella giornata di oggi sono state prodotte <span class="producted-cheese"></span> forme che sono destinate alla vendita. </h5>
                    </div>
                    <div class="card">
                        <header class="card-header">
                            <div class="cheese-logo-container"></div>
                            <h3>Le forme vendute</h3>
                        </header>
                        <h5>Nella giornata di oggi sono state vendute <span class="selled-cheese"></span> forme. Cosa aspetti ad acquistarle? Non te ne pentirai! </h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/main-view.js" type="module"></script>
</body>

</html>