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
    <h3 class="head-line">
        <a <?= ($page == "dairy") ? $active : '' ?> class="header-option" href="../login-page/login-page.php"> Area riservata </a>
    </h3>
</header>