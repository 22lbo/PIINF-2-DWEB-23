<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire "Swiss"</title>
    <meta charset="UTF-8">
    <style>
/*        html {
            margin:0px;
            padding:0px;
            width:auto;
        }
        body {
            width:500px;
            margin-left: auto;
            margin-right:auto;
        }*/
        h2 {
            position: relative;
            left: 5%;
        }
        table {

        }
        th {
            text-align: left;
            width: 75px;
        }
        td {
            position: relative;
            //left: -30px;
        }
        .boxesCat{
            width : 50px;
        }
        .checkbox {
            margin-top: 30px;
        }
        .send_button{
            position: relative;
            left: 15%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
include("airport.inc.php");
include("category.inc.php");
define("depart", "Genève");
$dateA = date("Y-m-d");
$dateR = date("Y-m-d", strtotime("tomorrow"));
$status = 0;
if ($_SESSION) {
    $status++;
}
?>
<img src='.\logo-swiss-2x.png' alt='SWISS airline logo' height='80px'>
<form action='result.php' method='post'>
    <?php
    //echo $status;
        if ($status == 0)
            echo "<h2>Réservez votre vol aller</h2>";
        else
            echo "<h2>Réservez votre vol retour</h2>";

        echo "<table>";
        echo "<tr>";
        echo "<th class='text'>De</th>";
        echo "<td><select class='boxes' name='depart'>";
        if ($status == 0) {
            echo "<option value='GVA'>" . depart . "</option>";
            foreach ($aeroports as $key => $value) {
                echo "<option value='$key'>" . $value . "</option>";
            }
        }
        else
            foreach($aeroports as $key => $value) {
                if ($key == $_SESSION['vols'][0]['destination']){
                    echo "<option value='$key'>".$value."</option>";
                }
            }
        echo "</select></td>";
        echo "<th class='text'>À</th>";
        echo "<td><select class='boxes' name='destination'>";
        if ($status == 0) {
            foreach ($aeroports as $key => $value) {
                echo "<option value='$key'>" . $value . "</option>";
            }
        }
        else
            foreach($aeroports as $key => $value) {
                if ($key == $_SESSION['vols'][0]['depart']){
                    echo "<option value='$key'>".$value."</option>";
                }
            }

        echo "</select><td/>";
        echo "</tr>";
        echo "<tr>";
        if ($status == 0) {
            echo "<th class='text'>Date Aller</th>";
            echo "<td><input class='boxes' type='date' name='date' value=$dateA></td>";
        }
        else {
            echo "<th class='text'>Date Retour</th>";
            echo "<td><input class='boxes' type='date' name='date' value=$dateR></td>";
        }

        echo "</tr>";
        foreach ($categories as $key => $value) {
            echo "<tr>";
            if ($status == 0) {
                $catValue = 0;
                if ($key == "adultes") {
                    $catValue = 1;
                }
                echo "<th class='text'>$value</th> <td><input class='boxesCat' type='number' name=$key value='$catValue'><td>";
            }
            else {
                echo "<th class='text'>$value</th> <td><input class='boxesCat' type='number' name=$key value=".$_SESSION['vols'][0][$key]."><td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<td><input class='checkbox' type='checkbox' name='reserver_siege' value='1'>Réserver votre siège ?<td>";
        echo "<br>";
        echo "<td><input class='send_button' type='submit' name='rechercher' value='Rechercher votre Vol'><td>";
    ?>
</form>
</body>
</html>