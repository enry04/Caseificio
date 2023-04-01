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
    <link rel="stylesheet" href="./css/shape-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "shape";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section>
            <h3>Inserisci le forme prodotte</h3>
            <div class="form-container">
                <form method="post">
                    <div class="row">
                        <div class="input-container">
                            <input type="text" class="dairy-text" disabled>
                            <span>Nome e codice caseificio</span>
                        </div>
                        <div class="input-container">
                            <input type="date" class="current-date" disabled value="<?= date("Y-m-d"); ?>">
                            <span>Data di oggi</span>
                        </div>
                    </div>
                    <div class="row">
                        <select required class="seasoning-select">
                            <option value="" selected disabled hidden>-- Seleziona stagionatura --</option>
                        </select>
                        <select class="typology-select" required>
                            <option value="" selected disabled hidden>-- Seleziona scelta --</option>
                            <option value="prima">Prima scelta</option>
                            <option value="seconda">Seconda scelta</option>
                        </select>
                    </div>
                    <div class="input-container">
                        <input type="number" class="quantity-number" value="1" min="1" max="100" required>
                        <span class="quantity-span">Quantità da inserire</span>
                    </div>
                    <input type="submit" class="submit-btn" value="Conferma">
                </form>
            </div>
            <h5 class="info-text hide-info">Forme aggiunte con successo!</h5>
        </section>
    </main>
    <script src="./js/shape-view.js" type="module"></script>
</body>

</html>