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
        <h3 class="dairy-title"></h3>
        <div class="slide-container">
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
        </div>
    </main>
    <script src="./js/dairy-view.js" type="module"></script>
</body>

</html>