<pre>
<?php
session_start();
require("./config/config.inc.php");
require("./class/Personne.class.php");

$per = new Personne(2);
echo $per;

echo $per->check_login("rasmus.lerdorf@php.net","Mot_de_passe");
print_r($_SESSION)
?>
</pre>
