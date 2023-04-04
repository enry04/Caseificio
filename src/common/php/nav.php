<div class="nav-container hide-nav">
    <span class="close-btn">&times;</span>
    <?php
    if ($_COOKIE['user_type'] == 'caseificio') {
    ?>
        <h4 class="nav-text head-line">
            <a <?= ($page == "milk") ? $active : '' ?> href="../milk-page/milk.php">Registra latte</a>
        </h4>
        <h4 class="nav-text head-line">
            <a <?= ($page == "shape") ? $active : '' ?> href="../shape-page/shape.php">Registra forme</a>
        </h4>
        <h4 class="nav-text head-line">
            <a <?= ($page == "codes") ? $active : '' ?> href="../codes-page/codes.php">Codici da stampare</a>
        </h4>
        <h4 class="nav-text head-line">
            <a href="../common/php/logout.php">Logout</a>
        </h4>
    <?php
    } else if ($_COOKIE['user_type'] == 'consorzio') {
    ?>
        <h4 class="nav-text head-line">
            <a href="">Gestione acquirenti</a>
        </h4>
        <h4 class="nav-text head-line">
            <a href="../sell-page/choose-form.php">Registra vendita</a>
        </h4>
        <h4 class="nav-text head-line">
            <a href="../common/php/logout.php">Logout</a>
        </h4>
    <?php
    }
    ?>
</div>
<script src="../common/js/nav-manager.js" type="module"></script>