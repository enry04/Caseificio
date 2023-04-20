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
    <link rel="stylesheet" href="../common/css/dairy-style.css">
    <link rel="stylesheet" href="./css/dairy-manager-style.css">
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
            <h2 class="title">Modifica i dati del caseificio</h2>
            <div class="dairy-container">
                <div class="slide-container">
                    <a class="prev">&#10094;</a>
                    <a class="next">&#10095;</a>
                </div>
                <div class="dairy-info-container">
                    <form method="post">
                        <div class="row">
                            <div class="input-container">
                                <input type="text" class="dairy-title" required>
                                <span>Nome caseificio</span>
                            </div>
                            <div class="input-container">
                                <input type="text" class="holder-text" required>
                                <span>Titolare</span>
                            </div>
                        </div>
                        <div class="input-container">
                            <textarea cols="30" rows="10" class="description-text" required></textarea>
                            <span>Descrizione</span>
                        </div>
                        <input type="submit" value="Conferma modifica">
                    </form>
                    <h5 class="place-text"></h5>
                    <h5 class="coordinates-text"></h5>
                </div>
            </div>
            <h4 class="info-text hide-text"></h4>
        </section>
    </main>
    <script src="./js/dairy-view.js" type="module"></script>
</body>

</html>