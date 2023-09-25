<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borter Lucas</title>
</head>
<body>
<h2>Choix des options</h2>
<form action="result.php" method="post">
    <?php
        include_once('data.inc.php');
        foreach($tab_options AS $key => $option){
            echo "$option<input type='checkbox' name='$key' value='$option'><br>";
        }
    ?>
    <input type="submit" name="send" value="Envoyer">
</form>
</body>
</html>