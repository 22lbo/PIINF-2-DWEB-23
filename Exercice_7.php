<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 7</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<h1>Table de multiplication</h1>";

    echo "<table border =\"2\">";
        echo "<thead bgcolor =\"lightgray\">";
            echo "<tr>";
                for($i=0; $i<13; $i++) {
                    echo "<th>$i</th>";
                }
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
                for($j=2; $j<13; $j++) {
                    echo "<tr>";
                    echo "<th bgcolor =\"lightgray\">$j</th>";

                    for($k=1; $k<13; $k++) {
                        echo "<td>".$j*$k."</td>";
                    }
                    echo "</tr>";
                }
        echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>