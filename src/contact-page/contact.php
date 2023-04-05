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
    <link rel="stylesheet" href="./css/contact-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "contacts";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section class="form-section">
            <?php
            if (TokenManager::isAuthenticated() && $_COOKIE['user_type'] == 'consorzio') {
            ?>
                <h3>Contatta un caseificio!</h3>
                <div class="form-container">
                    <form method="post" class="first-form">
                        <select required>
                            <option value="" selected disabled hidden>-- Seleziona caseificio --</option>
                        </select>
                        <textarea class="first-textarea" cols="30" rows="10" placeholder="Messaggio" required></textarea>
                        <input type="submit" value="Invia messaggio" class="submit-btn">
                    </form>
                </div>
                <script src="./js/contact-dairy-view.js" type="module"></script>
            <?php
            } else {
            ?>
                <h3>Contatta il consorzio!</h3>
                <div class="form-container">
                    <form method="post" class="second-form">
                        <input type="email" class="email-text" placeholder="La tua email" required>
                        <textarea class="second-textarea" cols="30" rows="10" placeholder="Messaggio" required></textarea>
                        <input type="submit" value="Invia messaggio" class="submit-btn">
                    </form>
                </div>
                <script src="./js/contact-consortium-view.js" type="module"></script>
            <?php
            }
            ?>
            <h5 class="info-text hide-info"></h5>
        </section>
    </main>
</body>

</html>