<?php
require_once(WAY."/includes/autoload.inc.php");
$per = new Personne($_SESSION['id']);
if(!$per->check_connect()){
session_destroy();
header('Location: '.URL.'/login.php');
exit;
}
?>