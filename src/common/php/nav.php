<div class="nav-container hide-nav">
    <span class="close-btn">&times;</span>
    <?php
    if ($_COOKIE['user_type'] == 'caseificio') {
    ?>
        <h4 class="nav-text">
            <a href="">Registra latte</a>
        </h4>
        <h4 class="nav-text">
            <a href="">Registra forma</a>
        </h4>
        <h4 class="nav-text">
            <a href="">Logout</a>
        </h4>
    <?php
    } else if ($_COOKIE['user_type'] == 'consorzio') {
    ?>  
        <h4 class="nav-text">
            <a href="">Gestione acquirenti</a>
        </h4>
        <h4 class="nav-text">
            <a href="">Registra vendita</a>
        </h4>
        <h4 class="nav-text">
            <a href="">Logout</a>
        </h4>
    <?php
    }
    ?>
</div>
<script src="../common/js/nav-manager.js"></script>