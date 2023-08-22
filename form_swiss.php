<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Results Page</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    define("depart", "Genève");
    $destinations = array("Adélaïde","Alicante","Athenes","Atlanta","Buenos Aires", "Bâle");
    $dateD = date("Y-m-d");
    $dateR = date("Y-m-d", strtotime("tomorrow"));
    echo "<img src='C:\wamp64\www\PIINF-2-DWEB-23\logo-swiss-2x.png' alt='SWISS airline logo'>";
    echo "<h2>Réservez votre vol</h2>";
    echo "<form action='result.php' method='post'>";
        echo "De";
        echo "<select>";
            echo "<option name='depart'>".depart."</option>";
        echo "</select>";
        echo "À";
        echo "<select>";
            echo "<option name='destination'>".$destinations[0]."</option>";
            echo "<option name='destination'>".$destinations[1]."</option>";
            echo "<option name='destination'>".$destinations[2]."</option>";
            echo "<option name='destination'>".$destinations[3]."</option>";
            echo "<option name='destination'>".$destinations[4]."</option>";
            echo "<option name='destination'>".$destinations[5]."</option>";
        echo "</select>";

        echo "<br>";
        echo "Vol Aller";
        echo "<input type='date' name='dateD' value=$dateD>";
        echo "Vol Retour";
        echo "<input type='date' name='dateR' value=$dateR>";
        echo "<br>";

        echo "Adultes <input type='text' value='1'>";
        echo "<br>";
        echo "Enfants <input type='text' value='0'>";
        echo "<br>";
        echo "Bébés <input type='text' value='0'>";
    echo "<br>";
        echo "<input type='checkbox'>Réserver votre siège ?";
    echo "<br>";
        echo "<input type='submit' value='Rechercher votre Vol'>";
    echo "</form>";
    ?>
</body>
</html>