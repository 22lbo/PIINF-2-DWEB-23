<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice tableau 1</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $jourNom = date("D");
    $tabJour = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

    switch($jourNom) {
        case "Mon":
            echo "Nous sommes ".$tabJour[0];
            break;
        case "Tue":
            echo "Nous sommes ".$tabJour[1];
            break;
        case "Wed":
            echo "Nous sommes ".$tabJour[2];
            break;
        case "Thu":
            echo "Nous sommes ".$tabJour[3];
            break;
        case "Fri":
            echo "Nous sommes ".$tabJour[4];
            break;
        case "Sat":
            echo "Nous sommes ".$tabJour[5];
            break;
        case "Sun":
            echo "Nous sommes ".$tabJour[6];
            break;
    }


    ?>
</body>
</html>