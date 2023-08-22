<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Check des formulaires</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<h2>Contenu de la variable _POST</h2>";
    echo "<table border='2'>";
        echo "<thead bgcolor='lightgray'>";
            echo "<tr>";
                echo "<th>Cleft</th>";
                echo "<th>Valeurs</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            foreach($_POST AS $key => $value) {
                echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$value</td>";
                echo "</tr>";
            }
            foreach($_GET AS $key => $value) {
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        echo "</tbody>";
    echo "</table>";

    if($_POST == true){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
    else{
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    }
    ?>
</body>
</html>