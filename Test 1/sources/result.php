<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borter Lucas</title>
</head>
<body>
<h2>Mes options</h2>
<?php
include_once('data.inc.php');
$ammount = 0;

foreach($_POST AS $option)
{
    if($option === 'Envoyer') {
        break;
    }
    echo $option."<br>";
    $ammount++;
}

echo "<br>";
if ($ammount != 0) {
    echo "Nombre d'options sélectionnées : $ammount";
}
else {
    echo "Aucune option sélectionnée";
}
?>
</body>
</html>