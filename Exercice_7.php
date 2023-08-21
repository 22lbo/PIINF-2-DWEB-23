<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 5</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    /*echo "<h1>Table de multiplications</h1>";*/

    echo "<table border =\"2\">";
    echo "<tr>";
    for($i=1; $i<13; $i++) {
        echo "<th>$i</th>";
        echo "<tr>";
        for($j=1; $j<13; $j++) {
            echo "<td>".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>