<?php

require("../common/php/connection.php");
require_once("../common/php/database.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../common/css/page-style.css">
    <link rel="stylesheet" href="../common/css/header-style.css">
    <link rel="stylesheet" href="../common/css/nav-style.css">
    <link rel="icon" href="../common/imgs/logo.png">
    <link rel="stylesheet" href="./css/choose-form-style.css">
</head>

<body>
    <?php
    require_once("../common/php/token-manager.php");
    $page = "sell";
    $active = 'class="active-page"';
    require_once('../common/php/header.php');
    ?>


    <div style="display: flex; justify-content: center; align-items: center; margin-top:50px">
        <form action="choose-form.php" method="POST">
            <label for="search">Inserisci codice forma:</label>
            <input type="text" id="search" name="search" required>
            <input type="submit" value="Cerca">
        </form>
    </div>

    <div style="display: flex; justify-content: center; align-items: center;">
        <form action="sell.php" method="POST">
            <table>
                <tr>
                    <td style="background-color: gray;">Codice Forma</td>
                    <td style="background-color: gray;">Seleziona per la vendita</td>
                </tr>

                <?php
                $page_size = 10;

                $sql = "SELECT * FROM tForma WHERE stato = 'S'";

                if (isset($_POST['search'])) {
                    $search_term = $_POST['search'];
                    $sql .= " AND codice LIKE '%$search_term%'";
                }

                $result = $db->query($sql);
                $total_records = mysqli_num_rows($result);
                $total_pages = ceil($total_records / $page_size);

                if (!isset($_GET['page']) || !is_numeric($_GET['page'])) {
                    $current_page = 1;
                } else {
                    $current_page = (int)$_GET['page'];
                }

                $offset = ($current_page - 1) * $page_size;

                $sql .= " LIMIT $offset, $page_size";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . $row['codice'] . "</td>
                    <td><input type=\"radio\" required name=\"opzione\" value=\"" . $row['id'] . "\"></td>
                </tr>";
                    }
                } else {
                    echo "<span> non ci sono risultati</span>";
                }
                ?>

            </table>

            <?php
            if ($total_pages > 1) {
                echo "<div style=\"display:flex; justify-content:center;\">";
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $current_page) {
                        echo "<span style=\"margin:5px;\">$i</span>";
                    } else {
                        echo "<a href=\"choose-form.php?page=$i\" style=\"margin:5px;\">$i</a>";
                    }
                }
                echo "</div>";
            }
            ?>

            <input type="submit" value="Conferma">

        </form>
    </div>






</body>

</html>