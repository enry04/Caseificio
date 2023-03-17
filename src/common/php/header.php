<header class="page-header">
    <div class="logo-container"></div>
    <div class="center-header-container">
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
    <h3 class="popUp-block head-line">
        Account
        <input type="checkbox" class="option-btn">
        <div class="popUp-menu-container hide">
            <div class="popUp-arrow">
            </div>
            <div class="popUp-inner">
                <div class="popUp-line">
                    <h4 class="popUp-btn">
                        <a href="">Accedi</a>
                    </h4>
                </div>
                <div class="popUp-line">
                    <h4 class="popUp-btn">
                        <a href="">Registrati</a>
                    </h4>
                </div>
            </div>
    </h3>
    <script src="../common/js/popup-manager.js" type="module"></script>
</header>