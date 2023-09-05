<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Stockage ittératif en session</title>
    <meta charset="UTF-8">
</head>
<body>
<pre>
<?php
require_once("carte.inc.php");
$table = 0;
if (isset($_POST['save'])) {
    //print_r($_POST);

    $num_starter = $_POST['starter'];
    $num_main = $_POST['main'];
    $num_desert = $_POST['desert'];
    $table = $_POST['table'];

    $client = array("starter" => $num_starter, "main" => $num_main, "desert" => $num_desert);

    $_SESSION['commande'][$table][] = $client;

    print_r($_SESSION);
}
?>
</pre>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
    <h1>Passez votre commande</h1>

    <h3>Table</h3>
    <input type='number' name='table' min="1" value="<?php echo $table;?>">

    <h3>Entrée</h3>
    <select name='starter'>
        <?php
        $tab_starters = $carte['starter'];
        foreach($tab_starters AS $key => $starter) {
            echo "<option value='$key'>$starter</option>";
        }
        ?>
    </select>

    <h3>Plat principal</h3>
    <select name='main'>
        <?php
        $tab_mains = $carte['main'];
        foreach($tab_mains AS $key => $main) {
            echo "<option value='$key'>$main</option>";
        }
        ?>
    </select>

    <h3>Dessert</h3>
    <select name='desert'>
        <?php
        $tab_desert = $carte['desert'];
        foreach($tab_desert AS $key => $desert) {
            echo "<option value='$key'>$desert</option>";
        }
        ?>
    </select>
    <br><input type='submit' name='save' value='Commander'>
</form>
<br><a href="destroy.php">Destroy</a>
</body>
</html>