<?php
header('Content-Type: application/json');
session_start();
require("../config/config.inc.php");
require_once(WAY."/includes/autoload.inc.php");

$per = new Personne();

if($per->check_email($_POST['email_per'])) {
    $tab['reponse'] = false;
    $tab['message']['texte'] = "Cet email est déjà utilisé !";
    $tab['message']['type'] = "danger";
} else{
    $id = $per->add($_POST);
    $per->set_id($id);
    if($per->init()){
        $tab['reponse'] = true;
        $tab['message']['texte'] = "Bienvenue, utilisez les identifiants créés pour vous connecter ! "."<br><a href='login.php'>Connexion</a>";
        $tab['message']['type'] = "succes";
    }
}
echo json_encode($tab);
?>