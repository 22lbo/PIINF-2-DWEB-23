<?php
include("./notes.inc.php");

echo "<table border = 2px>";
foreach ($tab_notes AS $abr_domaine => $domaine) {
    if ($abr_domaine == "comp_info")
        break;
    echo "<tr><th colspan='4'>".$domaine['desc']."</th></tr>";

    $nb_notes = 0;
    $somme_notes = 0;

    foreach ($domaine['modules'] AS $key => $module) {
        echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>".$module['desc']."</td>";
            echo "<td>".$module['date']."</td>";
            echo "<td>".$module['note']."</td>";
        echo "</tr>";
        $nb_notes++;
        $somme_notes += $module['note'];
    }

    $tab_notes[$abr_domaine]['moyenne'] = (round(($somme_notes / $nb_notes) * 2) / 2);
    echo "<tr>";
        echo "<td colspan=3>Moyenne :</td>";
        echo "<td>".$tab_notes[$abr_domaine]['moyenne']."</td>";
    echo "</tr>";
    print_r($domaine);
}
echo "</table>";

echo "<table border =2px>";
    $comp_info = 0;
    foreach ($tab_notes as $key => $domaine) {
        if ($key == "tpi" || $key == "comp_info") {
            break;
        }
        echo "<tr>";
            echo "<td>".$domaine['desc']."</td>";
            echo "<td>".$domaine['ponderation']."%</td>";
            echo "<td>".$domaine['moyenne']."</td>";
        echo "</tr>";
        $comp_info += ($tab_notes[$key]['moyenne'] * $tab_notes[$key]['ponderation']);
    }
    echo "<tr>";
    echo "<td colspan='2'>".$tab_notes['comp_info']['desc']."</td>";
    $tab_notes['comp_info']['moyenne'] = (round(($comp_info / 100) * 2) / 2);
    echo "<td>".$tab_notes['comp_info']['moyenne']."</td>";
    echo "</tr>";
echo "</table>";

echo "<table border =2>";
    $note_globale = 0;
    foreach ($tab_notes as $key => $domaine) {
        if ($key == "tpi" || $key == "comp_info") {
            echo "<tr>";
                echo "<td>".$domaine['desc']."</td>";
                echo "<td>".$domaine['ponderation']."%</td>";
                echo "<td>".$domaine['moyenne']."</td>";
            echo "</tr>";
            $note_globale += ($tab_notes[$key]['moyenne'] * $tab_notes[$key]['ponderation']);
        }
    }
    echo "<tr>";
        $tab_notes['note_globale'] = (round(($note_globale / 100) * 2) / 2);
        echo "<td colspan =2>Note globale :</td>";
        echo "<td>".$tab_notes['note_globale']."</td>";
    echo "</tr>";
echo "</table>";

echo "<pre>";
print_r($tab_notes);
echo "</pre>";


//pas possible de faire des echo sur des tableaux
//--> desc, desc, note et date sont des cases - ci, cie, modules et les numeros des modules sont des tableaux
/*
$tab_notes['ci']['desc'] = "Compétences en informatique";
$tab_notes['ci']['modules'][117]['desc'] = "Mettre en place ...";
$tab_notes['ci']['modules'][117]['note'] = 5.5;
$tab_notes['ci']['modules'][117]['date'] = "2022-06-19";
$tab_notes['ci']['modules'][431]['desc'] = "Mandats ...";
$tab_notes['ci']['modules'][431]['note'] = 5.5;
$tab_notes['ci']['modules'][431]['date'] = "2022-06-20";
*/
?>





