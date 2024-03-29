<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/page-style.css">
    <link rel="stylesheet" href="../common/css/header-style.css">
    <link rel="stylesheet" href="../common/css/form-style.css">
    <link rel="stylesheet" href="./css/login-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
    <title>Caseifcio</title>
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "login";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>
    <main>
        <section class="form-section">
            <h3>
                Login
            </h3>
            <div class="form-container">
                <form method="post">
                    <div class="input-container">
                        <input type="text" class="username-text" required>
                        <span>Nome utente</span>
                    </div>
                    <div class="input-container">
                        <input type="password" class="password-text" required>
                        <span>Password</span>
                    </div>
                    <input type="submit" class="submit-btn" value="Conferma">
                </form>
            </div>
            <h5 class="error-info">

            </h5>
        </section>
    </main>
    <script src="../login-page/js/login-view.js" type="module"></script>
</body>

</html>