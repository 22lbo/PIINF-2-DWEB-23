<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Génération de formulaires avec un tableau</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Commande client :</h1>
    <?php
    $carte[] =  "Escalope de porc pannée";
    $carte[] =  "Entrecôte de boeuf de la région";
    $carte[] =  "Cordon bleu de veau à la tête de moine";
    $carte[] =  "Joue de boeuf braisée";
    $carte[] =  "Filet de sandre meunière";
    $carte[] =  "Fondue";

    echo "<form action='result.php' method='post'>";

        echo "<select name='repas'>";
            foreach($carte AS $key => $plat) {
                echo "<option value='$key'>$plat</option>";
            }
        echo "</select>";
        echo "<br>";
        echo "<input type='submit' name='commande' value='Commander'></input>";
    echo "</form>";
    ?>
</body>
</html>