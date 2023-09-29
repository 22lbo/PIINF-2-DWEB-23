<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title> HariShop </title>
        <style>
            #panier{
                position:absolute;
                top:20px;
                right:20px;
                border:3px solid gray;
            }
            form{
                display:inline;
            }
        </style>
    </head>
    <body>
        <?php
        require_once("articles.php");
        echo "<div id=\"panier\">";

        echo "<h2>Votre panier contient : </h2>";
        if(isset($_POST['plus'])){
            $id_article = $_POST['id'];
            $nom_article = $articles[$id_article]['nom'];
            $prix_article = $articles[$id_article]['prix'];

            $panier = array();
            foreach($articles AS $key=>$article) {
                $panier[$key] = $key;
            }
            foreach($panier AS $key=>$item) {
                if ($panier[$key] == $id_article);
                    $panier[$id_article] = array("nom"=>$nom_article, "prix"=>$prix_article);
            }

            $_SESSION['panier'][] = $panier;

            foreach($_SESSION AS $key=>$item) {
                echo $item[0][1]['nom']." (".$item[0][1]['prix'].")";
            }
        }
        if(isset($_POST['moins'])){

        }

        echo "</div>";
        echo "\n<table border=\"2\">";

        foreach($articles AS $id => $article) {
            echo "\n\t<tr>";

            echo "\n\t\t<td rowspan=\"3\">\n\t\t\t<img src=\"./img/".$id.".jpg\" height=\"100px\">\n\t\t</td>";
            echo "\n\t\t<td>".$article['nom']."</td>";
            echo "\n\t</tr>";
            echo "\n\t<tr>";
            echo "\n\t\t<td>CHF ".$article['prix']."</td>";
            echo "\n\t</tr>";
            echo "\n\t<tr>";
            echo "\n\t\t<td>\n\t\t\t<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">";
            echo "\n\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"".$id."\"/>";
            echo "\n\t\t\t\t<input type=\"submit\" name=\"plus\" value=\"+\"/>";
            echo "\n\t\t\t</form>";
            echo "\n\t\t\t<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">";
            echo "\n\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"".$id."\"/>";
            echo "\n\t\t\t\t<input type=\"submit\" name=\"moins\" value=\"-\"/>";
            echo "\n\t\t\t</form>\n\t\t</td>";

            echo "\n\t</tr>";
        }

        echo "</table>";
        ?>


    </body>
</html>
