<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
<?php
session_start();

if(isset($_POST['result'])){
    $chiffre_1 = $_POST['chiffre_1'];
    $chiffre_2 = $_POST['chiffre_2'];
    $operateur = $_POST['operator'];

    //calcule le resultat en fonction de l'operateur
    if($operateur == '+'){
        $result = $chiffre_1 + $chiffre_2;
    } else{
        $result = $chiffre_1 - $chiffre_2;
    }

    $calcul = array('chiffre_1'=>$chiffre_1, 'chiffre_2'=>$chiffre_2, 'operator'=>$operateur, 'resultat'=>$result);

    $_SESSION['operations'][] = $calcul;

    //affiche tout les calculs précédents
    foreach($_SESSION AS $value) {
        foreach($value AS $key => $value2) {
            echo $value2['chiffre_1']." ".$value2['operator']." ".$value2['chiffre_2']." = ".$value2['resultat']."<br>";
        }
    }
}

//réinitialisé la session
if(isset($_POST['reset'])){
    session_destroy();
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="reset" value="réinitialiser">
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="number" name="chiffre_1" value="<?php if(isset($result)){echo $result;}?>">

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
    </select>

    <input type="number" name="chiffre_2">
    <input type="submit" name="result" value="=">
</form>


</body>
</html>