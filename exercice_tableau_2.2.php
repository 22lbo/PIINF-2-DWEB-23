<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice tableau 2.2</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<h2>Livret de 7</h2>";
    $tab = array(0,7,14,21,28,35,42,49,56,63,70,77,84);
    for($i=1; $i<13; $i++) {
        echo "$i * 7 = $tab[$i]";
        echo "<br>";
    }
    ?>
</body>
</html>