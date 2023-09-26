<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice tableau 2.1</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $tab = array();
    for($i=1; $i<13; $i++) {
        $tab[$i] = $i*7;
    }

    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    ?>
</body>
</html>