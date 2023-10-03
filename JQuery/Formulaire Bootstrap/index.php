<?php
session_start();
require("./config/config.inc.php");
require_once(WAY."/includes/autoload.inc.php");
$per = new Personne($_SESSION['id']);
if(!$per->check_connect()){
    session_destroy();
    header('Location: '.URL.'/tutos/login.php');
    exit;
}

require_once(WAY."/includes/head.inc.php");
?>
<div class="row">
    <div class="header">
        <h3>Bienvenue</h3>
    </div>
</div>
