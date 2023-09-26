<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 5</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $seconde = date("s");

    if ($seconde % 2)
        echo $seconde." est impaire";
    else
        echo $seconde." est paire";
    ?>
</body>
</html>