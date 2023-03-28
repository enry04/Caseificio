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
    <!-- <link rel="stylesheet" href="./css/milk-style.css"> -->
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "milk";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section>
            <h3>Inserisci il latte giornaliero</h3>
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
                        <div class="input-container">
                            <input type="number" class="milk-produced-number" required min="1" max="10000">
                            <span>Latte raccolto (in litri)</span>
                        </div>
                        <div class="input-container">
                            <input type="number" class="milk-used-number" required min="1" max="10000">
                            <span>Latte impiegato (in litri)</span>
                        </div>
                    </div>
                    <input type="submit" value="Conferma" class="submit-btn">
                </form>
            </div>
        </section>
    </main>
    <script src="./js/milk-view.js" type="module"></script>
</body>

</html>