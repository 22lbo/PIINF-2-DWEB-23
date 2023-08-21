<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exercice 4</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    define("pi", 3.1415);
    $rayon = 4;
    $diametre = $rayon*2;
    $circonference  = pi*$diametre;
    $surface = pi*$rayon**2;

    echo "Le diamètre du cercle : ".$rayon."*2"."=".round($diametre,2);
    echo "<br>";
    echo "La circonférence du cercle : ".$rayon."*2*".pi."=".round($circonference,2);
    echo "<br>";
    echo "La surface du cercle : ".pi."*".$rayon."^2"."=".round($surface,2);
    ?>
</body>
</html>