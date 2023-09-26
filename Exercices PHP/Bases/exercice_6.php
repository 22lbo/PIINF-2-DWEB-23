<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 6</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $mois = date ("M");

    switch($mois) {
        case "Jan":
            echo "Janvier";
            break;
        case "Feb":
            echo "Février";
            break;
        case "Mar":
            echo "Mars";
            break;
        case "Apr":
            echo "Avril";
            break;
        case "May":
            echo "Mai";
            break;
        case "Jun":
            echo "Juin";
            break;
        case "Jul":
            echo "Juillet";
            break;
        case "Aug":
            echo "Août";
            break;
        case "Sep":
            echo "Septembre";
            break;
        case "Oct":
            echo "Octobre";
            break;
        case "Nov":
            echo "Novembre";
            break;
        case "Dec":
            echo "Décembre";
            break;
    }
    ?>
</body>
</html>