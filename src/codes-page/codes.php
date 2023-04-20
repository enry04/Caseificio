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
    <link rel="stylesheet" href="../common/css/table-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "codes";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section class="table-section">
            <h3>I codici da stampare sulle forme</h3>
            <h4 class="no-data-text hide">Non c'è nessun codice da stampare</h4>
            <table>
            
            </table>
        </section>
    </main>
    <script src="./js/codes-view.js" type="module"></script>
</body>

</html>