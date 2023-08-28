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
        .moyennes_generales {
            border-bottom: 2px solid gray;
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
    //tableau des titres des modules theoriques
    $tab['modules']['nom'] = array("106" => "Interroger, traiter et assurer la maintenance des bases de données","114" => "Mettre en œuvre des systèmes de codification, de compression et d’encryptage",
        "117" => "Mettre en place l’infrastructure informatique et réseau d’une petite entreprise","122" => "Automatiser des procédures à l’aide de scripts","162" => "Analyser et modéliser des données",
        "164" => "Créer des bases de données et y insérer des données","231" => "Appliquer la protection et la sécurité des données","319" => "Concevoir et implémenter des applications","320" => "Programmer orienté objet",
        "322" => "Concevoir et implémenter des interfaces utilisateur","346" => "Concevoir et réaliser des solutions cloud","431" => "Exécuter des mandats de manière autonome dans son propre environnement professionnel");

    //tableau des notes de CCO des modules theoriques
    $tab['modules']['notes'] = array('106' => '6', '117' => '5.5', '122' => '5', '162' => '5', '164' => '5.5', '231' => '5.5', '319' => '4', '431' => '4.5');

    //tableau des titres des CIE
    $tab['cie']['nom'] = array("123" => "Activer les services d´un serveur","187" => "Mettre en service un poste de travail ICT avec le système d’exploitation",
        "216" => "Intégrer les terminaux IoE dans une plateforme existante","293" => "Créer et publier un site Web");

    //tableau des notes de CCO des CIE
    $tab['cie']['notes'] = array('123' => '5.5', '187' => '5.5', '216' => '5.5', '293' => '6');

    //calcule la moyenne totale des modules et l'introduit dans la variable
    foreach($tab['modules']['notes'] AS $key => $val)
        $modules_moyenne = array_sum($tab['modules']['notes']) / sizeof($tab['modules']['notes']);

    //calcule la moyenne totale des CIE et l'introduit dans la variable
    foreach($tab['cie']['notes'] AS $key => $val)
        $cie_moyenne = array_sum($tab['cie']['notes'])/ sizeof($tab['cie']['notes']);


    //contient une moyenne calculée depuis la moyenne des modules et la moyenne des CIE
    $competences_info = ($cie_moyenne+$modules_moyenne*4)/5;

    //variable qui contient la note du TPI
    $tpi_note = 5;

    //note globale : moyenne de la note du TPI et la moyenne des competences informatiques
    $note_globale = ($tpi_note+$competences_info)/2;

    function abc($arg1, $arg2, $arg3, $arg4) {
        foreach($arg1 AS $arg2 => $arg3) {
            echo "<tr>";
            echo "<td>ICH " . $arg2 . " - " . $arg4[$arg2]. "</td>";
            if($arg1[$arg2] < 4)
                echo "<td class='moyenne col' style='color: red'>" . round($arg1[$arg2], 1). "</td>";
            else
                echo "<td class='moyenne col'>" . round($arg1[$arg2], 1). "</td>";
            echo "</tr>";
        }
    }

    function def($arg1) {
        if($arg1 < 4)
            echo "<td class='moyenne col' style='color: red'>".round($arg1,1)."</td>";
        else
            echo "<td class='moyenne col'>".round($arg1,1)."</td>";
    }

    echo "<h1>Bulletin ICH</h1>";
    echo "<table>";
        echo "<tr>";
            echo "<th>Modules de compétences en informatique</th>";
            echo "<th>Notes</th>";
        echo "</tr>";
        abc($tab['modules']['notes'], $key, $val, $tab['modules']['nom']);

        echo "<tr>";
            echo "<th>Cours Interentreprises</th>";
        echo "</tr>";
        abc($tab['cie']['notes'], $key, $val, $tab['cie']['nom']);

        echo "<tr>";
            echo "<th>Compentences en informatique</th>";
        echo "<tr>";
            echo "<td>Modules de compétences en informatique</td>";
            def($modules_moyenne);
        echo "</tr>";
        echo "<tr>";
            echo "<td>Cours Interentreprises</td>";
            def($cie_moyenne);
        echo "</tr>";
        echo "<tr>";
            echo "<td class='moyennes_generales'>Moyenne</td>";
            def($competences_info);
        echo "</tr>";

        echo "<tr>";
            echo "<th>TPI</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Note</td>";
            def($tpi_note);
        echo "</tr>";

        echo "<tr>";
            echo "<th class='moyennes_generales'>Note globale</th>";
            def($note_globale);
        echo "</tr>";

        echo "<tr>";
            echo "<th>Etat de CFC</th>";
            if($note_globale < 4)
                echo "<td class='col' style='background-color:red'>Échec</td>";
            else
                echo "<td class='col' style='background-color:green'>Réussi</td>";
        echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>