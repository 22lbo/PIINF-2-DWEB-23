<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 7</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<h1>Table de multiplication</h1>";
    echo "\n\t"."<table border =\"2\">";
        echo "\n\t\t"."<thead bgcolor =\"lightgray\">";
            echo "\n\t\t\t"."<tr>";
                for($i=0; $i<13; $i++) {
                    if($i == 0)
                        echo "\n\t\t\t\t"."<th></th>";
                    else
                        echo "\n\t\t\t\t"."<th>$i</th>";
                }
            echo "\n\t\t\t"."</tr>";
        echo "\n\t\t"."</thead>";
        echo "\n\t\t"."<tbody>";
                for($j=2; $j<13; $j++) {
                    echo "\n\t\t\t"."<tr>";
                    echo "\n\t\t\t\t"."<th bgcolor =\"lightgray\">$j</th>";
                    for($k=1; $k<13; $k++) {
                        echo "\n\t\t\t\t"."<td>".$j*$k."</td>";
                    }
                    echo "\n\t\t\t"."</tr>";
                }
        echo "\n\t\t"."</tbody>";
    echo "\n\t"."</table>";
    ?>
</body>
</html>