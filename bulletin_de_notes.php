<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Results Page</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
        }
        table {
            border: 2px solid lightgray;
        }
        th {
            background-color: lightgray;
            width: auto;
            text-align: left;
            font-size: 20px;
        }
        .dates{
            border-right: 2px solid lightgray;
            border-bottom: 2px solid lightgray;
        }
        .empty_head {
            background-color: lightgray;
        }
        .moyennes_generales {
            padding: 10px 0 10px 0;
        }
        .col {
            background-color: #ece7be;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    //tableau avec le nom, les notes et les dates des modules et les CIE
    $tab['modules']['nom'] = array("106" => "Interroger, traiter et assurer la maintenance des bases de données","114" => "Mettre en œuvre des systèmes de codification, de compression et d’encryptage",
        "117" => "Mettre en place l’infrastructure informatique et réseau d’une petite entreprise","122" => "Automatiser des procédures à l’aide de scripts","162" => "Analyser et modéliser des données",
        "164" => "Créer des bases de données et y insérer des données","231" => "Appliquer la protection et la sécurité des données","319" => "Concevoir et implémenter des applications","320" => "Programmer orienté objet",
        "322" => "Concevoir et implémenter des interfaces utilisateur","346" => "Concevoir et réaliser des solutions cloud","431" => "Exécuter des mandats de manière autonome dans son propre environnement professionnel");
    $tab['modules']['notes'] = array('106' => '6', '117' => '5.5', '122' => '5', '162' => '5', '164' => '5.5', '231' => '5.5', '319' => '4', '431' => '4.5');
    $tab['modules']['dates'] = array('106' => '2023-06-23','117' => '2023-01-19','122' => '2023-06-20','162' => '2023-01-18','164' => '2023-04-05',
        '231' => '2023-06-19','319' => '2023-01-20','431' => '2023-01-16');
    $tab['cie']['nom'] = array("123" => "Activer les services d´un serveur","187" => "Mettre en service un poste de travail ICT avec le système d’exploitation",
        "216" => "Intégrer les terminaux IoE dans une plateforme existante","293" => "Créer et publier un site Web");
    $tab['cie']['notes'] = array('123' => '5.5', '187' => '5.5', '216' => '5.5', '293' => '6');
    $tab['cie']['dates'] = array('123' => '2023-05-08','216' => '2023-03-16', '187' => '2022-09-16','293' => '2022-11-10');

    //calcule la moyenne totale des modules
    foreach($tab['modules']['notes'] AS $key => $val)
        $modules_moyenne = array_sum($tab['modules']['notes']) / sizeof($tab['modules']['notes']);
    //calcule la moyenne totale des CIE
    foreach($tab['cie']['notes'] AS $key => $val)
        $cie_moyenne = array_sum($tab['cie']['notes'])/ sizeof($tab['cie']['notes']);

    //contient une moyenne calculée depuis la moyenne des modules et la moyenne des CIE
    $competences_info = ($cie_moyenne+$modules_moyenne*4)/5;
    //variable qui contient la note du TPI
    $tpi_note = 1;
    //note globale : moyenne de la note du TPI et la moyenne des competences informatiques
    $note_globale = ($tpi_note+$competences_info)/2;

    function sortDates($date1, $date2) {
        return strtotime($date1) - strtotime($date2);
    }
    uasort($tab['modules']['dates'], "sortDates");
    uasort($tab['cie']['dates'], "sortDates");

    function display_notes($arg1, $arg2, $arg3, $arg4, $arg5) {
        foreach($arg1 AS $arg2 => $arg3) {
            echo "<tr>";
            echo "<td class='dates'>".$arg1[$arg2]."</td>";
            echo "<td>ICH ".$arg2." - ".$arg4[$arg2]."</td>";
            if($arg5[$arg2] < 4)
                echo "<td class='moyenne col' style='color: red'>".(round($arg5[$arg2]*2)/2)."</td>";
            else
                echo "<td class='moyenne col'>".(round($arg5[$arg2]*2)/2)."</td>";
            echo "</tr>";
        }
    }

    function display_moyennes($arg1) {
        if($arg1 < 4)
            echo "<td class='moyenne col' style='color: red'>".(round($arg1 * 2 )/2)."</td>";
        else
            echo "<td class='moyenne col'>".(round($arg1 * 2 )/2)."</td>";
    }
    ?>

    <h1>Bulletin ICH</h1>
    <table>
        <tr>
            <th>Dates</th>
            <th>Modules de compétences en informatique</th>
            <th>Notes</th>
        </tr>
        <?php
        display_notes($tab['modules']['dates'], $key, $val, $tab['modules']['nom'], $tab['modules']['notes']);
        ?>

        <tr>
            <td class='empty_head'></td>
            <th>Cours Interentreprises</th>
            <td class='empty_head'></td>
        </tr>
        <?php
        display_notes($tab['cie']['dates'], $key, $val, $tab['cie']['nom'], $tab['cie']['notes']);
        ?>

        <tr>
            <td class='empty_head'></td>
            <th>Compentences en informatique</th>
            <td class='empty_head'></td>
        <tr>
            <td></td>
            <td>Modules de compétences en informatique</td>
        <?php
        display_moyennes($modules_moyenne);
        ?>
        </tr>
        <tr>
            <td></td>
            <td>Cours Interentreprises</td>
        <?php
        display_moyennes($cie_moyenne);
        ?>
        </tr>
        <tr>
            <td></td>
            <td class='moyennes_generales'>Moyenne</td>
        <?php
        display_moyennes($competences_info);
        ?>
        </tr>

        <tr>
            <td class='empty_head'></td>
            <th>TPI</th>
            <td class='empty_head'></td>
        </tr>
        <tr>
            <td></td>
            <td>Note</td>
        <?php
        display_moyennes($tpi_note);
        ?>
        </tr>

        <tr>
            <td class='empty_head'></td>
            <th class='moyennes_generales'>Note globale</th>
        <?php
        display_moyennes($note_globale);
        ?>
        </tr>

        <tr>
            <td class='empty_head'></td>
            <th>Etat de CFC</th>
        <?php
        if($note_globale < 4)
        echo "<td class='col' style='background-color:red'>Échec</td>";
        else
        echo "<td class='col' style='background-color:green'>Réussi</td>";
        ?>
        </tr>
    </table>
</body>
</html>