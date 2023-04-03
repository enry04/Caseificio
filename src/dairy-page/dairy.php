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
    <link rel="stylesheet" href="../common/css/slider-style.css">
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
        <section>
            <h2 class="dairy-title"></h2>
            <div class="dairy-container">
                <div class="slide-container">
                    <a class="prev">&#10094;</a>
                    <a class="next">&#10095;</a>
                </div>
                <div class="dairy-info-container">
                    <h3 class="holder-text"></h3>
                    <h4 class="description-text"></h4>
                    <h5 class="place-text"></h5>
                    <h5 class="coordinates-text"></h5>
                </div>
            </div>
        </section>
        <!-- <section class="cards-section">
            <div class="main-container">
                <div class="sticky-container w-clearfix"></div>
                <div class="text-column-container">
                    <h1>The psychology of color</h1>
                    <h5>Each color portrays a different feeling or emotion, and by understanding the psychology of color, you can choose a color that will resonate with your target audience and give off the vibe & emotion you want.</h5>
                </div>
                <div class="cards-container">
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                </div>
            </div>
        </section> -->
        <section class="cards-section">
            <div class="main-container">
                <div class="text-column-container">
                    <h1>The psychology of color</h1>
                    <h5>Each color portrays a different feeling or emotion, and by understanding the psychology of color, you can choose a color that will resonate with your target audience and give off the vibe & emotion you want.</h5>
                </div>
                <div class="cards-container">
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                    <div class="card-container">ciao</div>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/dairy-view.js" type="module"></script>
</body>

</html>