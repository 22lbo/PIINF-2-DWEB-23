<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice tableau 4</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php

    echo "<h2>Exercice boucle FOREACH</h2>";

    $tab = array("nom" => "Borter", "prenom" => "Lucas", "adresse" => "Qwertz", "npa" => "2504", "ville" => "Bienne", "email" => "lucas.borter@ceff.ch");

    echo "\n\t"."<table>";
        echo "\n\t\t"."<tbody>";
            echo "\n\t\t\t"."<tr>";
            echo "\n\t\t\t\t"."<th>Clef</th>";
            echo "\n\t\t\t\t"."<th>Valeur</th>";
            echo "\n\t\t\t"."</tr>";
            foreach($tab AS $key => $value) {
                echo "\n\t\t\t"."<tr>";
                    echo "\n\t\t\t\t"."<td>$key</td>";
                    echo "\n\t\t\t\t"."<td>$value</td>";
                echo "\n\t\t\t"."</tr>";
            }
        echo "\n\t\t"."</tbody>";
    echo "\n\t"."</table>";
    ?>
</body>
</html>