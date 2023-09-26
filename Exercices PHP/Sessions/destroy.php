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
<h2>Etat de la session</h2>
<?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    session_destroy();

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
<br><a href="stockage_itteratif_session.php">Index</a>
</body>
</html>