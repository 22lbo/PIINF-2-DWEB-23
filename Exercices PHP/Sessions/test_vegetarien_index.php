<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test végétarien</title>
</head>
<body>
<h2>Testez votre capacité à devenir végétarien</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<?php
require_once("vegetarien_data.inc.php");
$num_question = 0;

if (isset($_POST['start'])) {
    $_SESSION['vegi'] = array();
    $_SESSION['vegi']['prenom'] = $_POST['prenom'];
    $_SESSION['vegi']['reponses'] = array("A" => 0, "B" => 0, "C" => 0);
    $_SESSION['vegi']['num_question'] = $num_question;
} elseif (isset($_POST['next'])) {
    $_SESSION['vegi']['num_question']++;
    $num_question = $_SESSION['vegi']['num_question'];
    $_SESSION['vegi']['reponses'][$_POST['rep']]++;
}
if ($num_question < 9) {
    if (isset($_SESSION['vegi']['prenom'])) {
        echo "<h4>Question ".($num_question+1)."</h4>";
        echo $tab['question'][$num_question]['texte'];
        echo "<br>";
        echo "<input type='radio' name='rep' value=A>" . $tab['question'][$num_question]['rep_1'] . "<br>";
        echo "<input type='radio' name='rep' value=B>" . $tab['question'][$num_question]['rep_2'] . "<br>";
        echo "<input type='radio' name='rep' value=C>" . $tab['question'][$num_question]['rep_3'] . "<br>";
        echo "<input type='submit' name='next' value='Question suivante'>";
    } else {
        echo "<label>Prénom</label><input type='text' name='prenom'>";
        echo "<br>";
        echo "<input type='submit' name='start' value='Débuter le test'>";
    }
}
else {
    $total_A = $_SESSION['vegi']['reponses']['A'];
    $total_B = $_SESSION['vegi']['reponses']['B'];
    $total_C = $_SESSION['vegi']['reponses']['C'];

    echo "<h4>Résultat du test</h4>";

    if ($total_A > $total_B && $total_A > $total_C) {
        echo "Vous avez obtenu un maximum de A";
        echo "<h3>".$tab['resultat']['A']['titre']."</h3>";
        echo $tab['resultat']['A']['details'];
    }
    elseif ($total_B > $total_A && $total_B > $total_C) {
        echo "Vous avez obtenu un maximum de B";
        echo "<h3>".$tab['resultat']['B']['titre']."</h3>";
        echo $tab['resultat']['B']['details'];
    }
    else {
        echo "Vous avez obtenu un maximum de C";
        echo "<h3>".$tab['resultat']['C']['titre']."</h3>";
        echo $tab['resultat']['C']['details'];
    }
}
?>
</form>
<h3>Contenu de la session</h3>
<?php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<a href="test_vegetarien_destroy.php">kill session</a>
</body>
</html>