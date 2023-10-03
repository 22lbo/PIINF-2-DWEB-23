<?php
session_start();
require("./config/config.inc.php");
require(WAY."/includes/secure.inc.php");
require_once(WAY."/includes/head.inc.php");
session_destroy();
?>
<div class="row">
    <div class="header">
        <h3>Bienvenue</h3>
    </div>
</div>
