<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Form Page</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $tabFeedback = array(1 => "Insuffisant", 2 => "Suffisant", 3 => "Bien", 4 => "Très bien");

        echo "<form action='check_des_formulaires.php' method='post'>"; //the get method doesn't post anything on the results page
            echo "<input type='text' name='name'> Nom d'utilisateur<br>";
            echo "<input type='email' name='email'> E-mail<br>";

            echo "<br>";

            echo "<select name='feedback'><br>";
                echo "<option value='1'>".$tabFeedback[1]."</option>";
                echo "<option value='2'>".$tabFeedback[2]."</option>";
                echo "<option value='3'>".$tabFeedback[3]."</option>";
                echo "<option value='4'>".$tabFeedback[4]."</option>";
            echo "</select><br>";

            echo "<br>";
            echo "<textarea name='messageBox'>Message</textarea><br>";
            echo "<br>";

            echo "<input type='radio' name='genre' value='H'>Homme<br>";
            echo "<input type='radio' name='genre' value='F'>Femme<br>";

            echo "<br>";

            echo "<input type='checkbox' name='newsletter' value='1'>S'inscrire à la newsletter<br>";

            echo "<br>";

            echo "<input type='submit' name='send' value='Submit'>";
        echo "</form>";
    ?>
</body>
</html>