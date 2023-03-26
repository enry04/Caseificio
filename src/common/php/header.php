<header class="page-header">
    <div class="logo-container"></div>
    <div class="center-header-container">
        <?php
        if (TokenManager::isAuthenticated()) {
            if ($_COOKIE['user_type'] == 'caseificio') {
        ?>
                <h3 class="head-line">
                    <a <?= ($page == "main") ? $active : '' ?> class="header-option" href="../main-page/main.php"> Home </a>
                </h3>
                <h3 class="head-line">
                    <a <?= ($page == "") ? $active : '' ?> class="header-option" href="../contacts-page/contacts.php">Contattaci</a>
                </h3>
                <h3 class="head-line">
                    <a <?= ($page == "") ? $active : '' ?> class="header-option" href="">Dettagli caseifici </a>
                </h3>
    </div>
    <h3 class="head-line menu-btn">Menù</h3>
<?php
            } else if ($_COOKIE['user_type'] == 'consorzio') {
?>
    <h3 class="head-line">
        <a <?= ($page == "main") ? $active : '' ?> class="header-option" href="../main-page/main.php"> Home </a>
    </h3>
    <h3 class="head-line">
        <a <?= ($page == "") ? $active : '' ?> class="header-option" href="../contacts-page/contacts.php">Contattaci </a>
    </h3>
    <h3 class="head-line">
        <a <?= ($page == "") ? $active : '' ?> class="header-option" href="">Gestione caseifici </a>
    </h3>
    </div>
    <h3 class="head-line menu-btn">Menù</h3>
<?php
            }
        require_once("../common/php/nav.php");
        } else {
?>
<h3 class="head-line">
    <a <?= ($page == "main") ? $active : '' ?> class="header-option" href="../main-page/main.php"> Home </a>
</h3>
<h3 class="head-line">
    <a <?= ($page == "contatcs") ? $active : '' ?> class="header-option" href="../contacts-page/contacts.php"> Contattaci </a>
</h3>
<h3 class="head-line">
    <a <?= ($page == "dairy") ? $active : '' ?> class="header-option" href="../dairies-page/dairies.php"> I nostri caseifici </a>
</h3>
</div>
<h3 class="head-line">
    <a <?= ($page == "login") ? $active : '' ?> class="header-option" href="../login-page/login.php"> Area riservata </a>
</h3>
<?php
        }
?>
</header>