<?php
include("./notes.inc.php");

echo "<table border = 2px>";
foreach ($tab_notes AS $abr_domaine => $domaine) {
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
        $moyenne = $somme_notes / $nb_notes;
        echo "<tr>";
            echo "<td colspan=3>Moyenne :</td>";
            echo "<td>".$moyenne."</td>";
            $tab_notes[$abr_domaine]['moyenne'] = $moyenne;
        echo "</tr>";
        print_r($domaine);

}
echo "</table>";

echo "<table border =2px>";
    foreach ($tab_notes as $key => $domaine) {
        echo "<tr>";
        echo "<td>".$domaine['desc']."</td>";
        echo "<td>".$domaine['ponderation']."%</td>";
        echo "<td>".$domaine['moyenne']."</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan='2'>Moyenne :</td>";
    $tab_notes['comp_info'] = ($tab_notes['ci']['moyenne'] * $tab_notes['ci']['ponderation'] + $tab_notes['cie']['moyenne'] * $tab_notes['cie']['ponderation']) / 100;
    echo "<td>" . (round($tab_notes['comp_info'] * 2) / 2) . "</td>";
    echo "</tr>";
echo "</table>";

echo "<table border =2px>";
foreach ($tab_notes AS $domaine) {
    echo "<tr>";

    echo "</tr>";

}
echo "<tr>";

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





