<?php
//force ou desactive l'affichage des erreurs PHP et SQL
define("DISPLAY_ERROR", 1);

//type d'erreur à afficher
error_reporting(E_ALL);
ini_set('display_errors', DISPLAY_ERROR);

//echo getcwd();
define("WAY","C:\wamp64\www\PIINF-2-DWEB-23\JQuery\Formulaire Bootstrap");
define("URL","http://formulaire_bootstrap");

//Connexion a la base de données
define("BASE_NAME","inscription");
define("SQL_HOST","localhost");
define("SQL_USER","root");
define("SQL_PASSWORD","");
?>



