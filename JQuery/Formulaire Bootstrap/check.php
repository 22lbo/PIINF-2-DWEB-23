<pre>
<?php
session_start();
require("./config/config.inc.php");
require(WAY."/includes/autoload.inc.php");

$per = new Personne(3);
echo $per;

echo $per->check_login("lucas.borter@ceff.ch","12345Aa@");

print_r($_SESSION);
if($per->check_connect()){
    echo "Logué";
} else{
    echo "pas logué";
}
?>
    <a href="controle_login.php">Logué ?</a>
</pre>
