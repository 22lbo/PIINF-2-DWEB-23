<?php
session_start();

require("./config/config.inc.php");
require("./class/Personne.class.php");

$per = new Personne($_SESSION['id']);

if($per->check_connect()){
    echo "Logué";
} else {
    echo "Pas logué";
}
?>