<?php
header('Content-Type: application/json');

session_start();
require("../config/config.inc.php");
require_once(WAY."/includes/autoload.inc.php");

$per = new Personne();

if($per->check_email($_POST['email_per'])) {
    $tab['reponse'] = false;
} else{
    $id = $per->add($_POST);
    $per->set_id($id);
    if($per->init()){
        $tab['reponse'] = true;
    }
}
echo json_encode($_POST);
?>
