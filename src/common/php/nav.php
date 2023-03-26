<div class="nav-container hide-nav">
    <span class="close-btn">&times;</span>
    <?php
    if ($_COOKIE['user_type'] == 'caseificio') {
    ?>
        <h4 class="nav-text head-line">
            <a href="">Registra latte</a>
        </h4>
        <h4 class="nav-text head-line">
            <a href="">Registra forma</a>
        </h4>
        <h4 class="nav-text head-line logout-btn">
            Logout
        </h4>
    <?php
    } else if ($_COOKIE['user_type'] == 'consorzio') {
    ?>
        <h4 class="nav-text head-line">
            <a href="">Gestione acquirenti</a>
        </h4>
        <h4 class="nav-text head-line">
            <a href="">Registra vendita</a>
        </h4>
        <h4 class="nav-text head-line logout-btn">
            Logout
        </h4>
    <?php
    }
    ?>
</div>
<script src="../common/js/nav-manager.js" type="module"></script>