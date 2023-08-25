<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Génération de formulaires avec un tableau a plusieurs dimensions</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $carte['starter'][] =  "Salade verte";
    $carte['starter'][] =  "Salade mêlée";
    $carte['starter'][] =  "Soupe de courge";
    $carte['starter'][] =  "Omelette aux fines herbes";
    $carte['starter'][] =  "Omelette au fromage";
    $carte['main'][] =  "Escalope de porc pannée";
    $carte['main'][] =  "Entrecôte de boeuf de la région";
    $carte['main'][] =  "Cordon bleu de veau à la tête de moine";
    $carte['main'][] =  "Joue de boeuf braisée";
    $carte['main'][] =  "Filet de sandre meunière";
    $carte['desert'][] =  "Parfait glacé au chocolat noir";
    $carte['desert'][] =  "Mousse au Damassons rouges";
    $carte['desert'][] =  "Trilogie de crème brûlées";
    $carte['desert'][] =  "Déclinaison de courge et chocolat noir";

    echo "<form action='result.php' method='post'>";
        echo "<h1>Passez votre commande</h1>";
        echo "<h3>Entrée</h3>";
        echo "<select name='starter'>";
            $tab_starters = $carte['starter'];
            foreach($tab_starters AS $key => $starter) {
                echo "<option value='$key'>$starter</option>";
            }
        echo "</select>";

        echo "<h3>Plat principal</h3>";
        echo "<select name='main'>";
            $tab_mains = $carte['main'];
            foreach($tab_mains AS $key => $main) {
                echo "<option value='$key'>$main</option>";
            }
        echo "</select>";

        echo "<h3>Dessert</h3>";
        echo "<select name='desert'>";
            $tab_desert = $carte['desert'];
            foreach($tab_desert AS $key => $desert) {
                echo "<option value='$key'>$desert</option>";
            }
        echo "</select>";
        echo "<br>";
        echo "<input type='submit' name='commande' value='Commander'>";
    echo "</form>";
    ?>
</body>
</html>