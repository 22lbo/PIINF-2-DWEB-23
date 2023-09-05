<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Génération de formulaires avec un tableau a plusieurs dimensions</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once("carte.inc.php");

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