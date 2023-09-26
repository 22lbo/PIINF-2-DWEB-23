<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Results Page</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
include("Sessions/airport.inc.php");
include("Sessions/category.inc.php");

echo "<pre>";
if (isset($_POST['rechercher'])) {
    session_start();

    $key_depart = $_POST['depart'];
    $key_destination = $_POST['destination'];
    $date_vol = $_POST['date'];
    $num_adultes = $_POST['adultes'];
    $num_enfants = $_POST['enfants'];
    $num_bebes = $_POST['bebes'];
    $nom_depart = $aeroports[$key_depart];
    $nom_destination = $aeroports[$key_destination];

    $vol = array('nom_depart' => $nom_depart,'id_depart' => $key_depart, 'nom_destination' => $nom_destination,'id_destination' => $key_destination, 'date' => $date_vol, 'adultes' => $num_adultes, 'enfants' => $num_enfants, 'bebes' => $num_bebes);
    $_SESSION['vols'][] = $vol;

    echo "<p>Départ : ".$_SESSION['vols'][0]['nom_depart']."(" .$_SESSION['vols'][0]['id_depart']. ")<br>Arrivée : ".$_SESSION['vols'][0]['nom_destination']."(" . $_SESSION['vols'][0]['id_destination'] . ")<br>Date : " . $_SESSION['vols'][0]['date'] . "<br>Passagers : " . ($_SESSION['vols'][0]['adultes'] + $_SESSION['vols'][0]['enfants'] + $_SESSION['vols'][0]['bebes']) . " (" . $_SESSION['vols'][0]['adultes'] . " adultes, " . $_SESSION['vols'][0]['enfants'] . " enfants, " . $_SESSION['vols'][0]['bebes'] . " bébés)</p>";
    foreach ($_SESSION AS $vols)
        if (array_key_exists(1, $vols))
            echo "<p>Départ : ".$_SESSION['vols'][1]['nom_depart']."(" .$_SESSION['vols'][1]['id_depart']. ")<br>Arrivée : ".$_SESSION['vols'][1]['nom_destination']."(" . $_SESSION['vols'][1]['id_destination'] . ")<br>Date : " . $_SESSION['vols'][1]['date'] . "<br>Passagers : " . ($_SESSION['vols'][1]['adultes'] + $_SESSION['vols'][1]['enfants'] + $_SESSION['vols'][1]['bebes']) . " (" . $_SESSION['vols'][1]['adultes'] . " adultes, " . $_SESSION['vols'][1]['enfants'] . " enfants, " . $_SESSION['vols'][1]['bebes'] . " bébés)</p>";

    print_r($_SESSION);
}
echo "</pre>";
foreach ($_SESSION AS $vols) {
    if (!array_key_exists(1, $vols))
        echo "<a href='Sessions/form_swiss.php'>Réserver un vol retour</a>";
    else {
        session_destroy();
        echo "<a href='Sessions/form_swiss.php'>Autre voyage</a>";
    }
}
?>

<!-- generation de fomulaire avec des tableaux-->
<!--    <h1>Commande client :</h1>
    <pre>
    --><?php
/*        $carte[] =  "Escalope de porc pannée";
        $carte[] =  "Entrecôte de boeuf de la région";
        $carte[] =  "Cordon bleu de veau à la tête de moine";
        $carte[] =  "Joue de boeuf braisée";
        $carte[] =  "Filet de sandre meunière";
        $carte[] =  "Fondue";

        print_r($_POST);
        echo "</pre>";

        echo $carte[$_POST['repas']]
    */?>

<!-- generation de fomulaire avec des tableaux a multiples dimensions-->
<!--    <h1>Commande client :</h1>
    <pre>-->
<!--    --><?php
/*    require_once("carte.inc.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $num_starter = $_POST['starter'];
    echo "Entrée : ".$carte['starter'][$num_starter];

    $num_main = $_POST['main'];
    echo "<br>Plat principal : ".$carte['main'][$num_main];

    $num_desert = $_POST['desert'];
    echo "<br>Dessert : ".$carte['desert'][$num_desert];
    */?>
</body>
</html>