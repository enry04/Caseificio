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
    <link rel="stylesheet" href="../common/css/form-style.css">
    <link rel="stylesheet" href="../common/css/slider-style.css">
    <link rel="stylesheet" href="./css/dairy-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "dairy";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section>
            <h2 class="dairy-title"></h2>
            <div class="dairy-container">
                <div class="slide-container">
                    <a class="prev">&#10094;</a>
                    <a class="next">&#10095;</a>
                </div>
                <div class="dairy-info-container">
                    <h3 class="holder-text"></h3>
                    <h4 class="description-text"></h4>
                    <h5 class="place-text"></h5>
                    <h5 class="coordinates-text"></h5>
                </div>
            </div>
        </section>
        <section class="cards-section">
            <div class="main-container">
                <div class="text-column-container">
                    <h1>I dati del <span class="card-title"></span></h1>
                    <h5>In ogni caseificio vengono aggiunti giornalmente il latte raccolto, quello impiegato per produrre forme di formaggio e la quantità di formaggio
                        prodotta. In questa sezione puoi trovare anche la quantità di formaggio venduto, la media del latte lavorato giornalmente in
                        quest anno da ogni caseificio situato a <span class="province-text"></span> e le forme prodotte in un intervallo di tempo.</h5>
                </div>
                <div class="cards-container">
                    <div class="card-container produced-milk-card">
                        <h3>Il latte raccolto</h3>
                        <h4>Sono stati raccolti <span class="produced-milk-span"></span>litri di latte di ottima qualità nella giornata di oggi!</h4>
                    </div>
                    <div class="card-container used-milk-card">
                        <h3>Il latte impiegato</h3>
                        <h4>Sono stati usati <span class="used-milk-span"></span>litri di latte per la produzione di forme di formaggio nella giornata di oggi!</h4>
                    </div>
                    <div class="card-container produced-cheese-card">
                        <h3>Le forme prodotte</h3>
                        <h4>Sono state prodotte <span class="quantity-cheese-span"> forme di formaggio destinate alla vendita!</span></h4>
                    </div>
                    <div class="card-container selled-cheese-card">
                        <h3>Le forme vendute</h3>
                        <h4>Sono state vendute <span class="selled-cheese-span"></span> forme di formaggio buonissimo. Cosa aspetti ad ordinarle anche tu?</h4>
                    </div>
                    <div class="card-container milk-produced-average-card">
                        <h3>La media del latte prodotto quest' anno nella provincia di <span class="card-province"></span></h3>
                        <h4>Quest' anno c'è una media di <span class="milk-average-span"></span> ltri di latte prodotti a <span class="card-province-span"></span>!</h4>
                    </div>
                    <div class="card-container producted-cheese-between-dates-card">
                        <h3>Le forme prodotte tra due date</h3>
                        <h4 class="date-text">Inserisci due date per visualizzare le forme prodotte in quell'arco di tempo!</h4>
                        <form method="post">
                            <div class="row">
                                <input type="date" class="first-date small-date" max="<?= date("Y-m-d"); ?>">
                                <input type="date" class="second-date small-date" min="<?= date(" Y-m-d"); ?>">
                            </div>
                            <input type="submit" value="Visualizza" class="small-submit">
                            <h5 class="result-text">Tra il <span class="first-date-span"></span> e il <span class="second-date-span"></span> sono state prodotte <span class="cheese-producted-between-dates-span"></span> forme di formaggio!</h5>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/dairy-view.js" type="module"></script>
</body>

</html>