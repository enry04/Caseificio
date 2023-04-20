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
    <link rel="stylesheet" href="./css/dairies-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "dairies";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>

    <main>
        <h3>I caseifici in giro per l'Italia</h3>
        <div class="dairies-container">
        </div>
    </main>
    <script src="./js/dairies-view.js" type="module"></script>
</body>

</html>