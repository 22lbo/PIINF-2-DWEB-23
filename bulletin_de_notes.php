<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Results Page</title>
    <meta charset="UTF-8">
    <style>
        th {
            font-size: 20px;
            float: left;
        }
        .moyenne{
            padding-left: 50px;
        }
    </style>
</head>
<body>
    <?php
    //moyenne d'un module = (note_1 + note_2 + note_3) / nombre de notes

    //tableau des titres des modules theoriques
    $tab_modules['nom'] = array("106" => "Interroger, traiter et assurer la maintenance des bases de données",
        "114" => "Mettre en œuvre des systèmes de codification, de compression et d’encryptage",
        "117" => "Mettre en place l’infrastructure informatique et réseau d’une petite entreprise",
        "122" => "Automatiser des procédures à l’aide de scripts",
        "162" => "Analyser et modéliser des données",
        "164" => "Créer des bases de données et y insérer des données",
        "231" => "Appliquer la protection et la sécurité des données",
        "319" => "Concevoir et implémenter des applications",
        "320" => "Programmer orienté objet",
        "322" => "Concevoir et implémenter des interfaces utilisateur",
        "346" => "Concevoir et réaliser des solutions cloud",
        "431" => "Exécuter des mandats de manière autonome dans son propre environnement professionnel");

    //tableau des notes de CCO des modules theoriques
    $tab_modules['notes'] = array('106' => '6', '117' => '5.5', '122' => '5', '162' => '5', '164' => '5.5', '231' => '5.5', '319' => '4', '431' => '4.5');

    //calcule la moyenne totale des modules et l'introduit dans la variable
    foreach($tab_modules['notes'] AS $key => $val)
    {
        $modules_moyenne = array_sum($tab_modules['notes']) / sizeof($tab_modules['notes']);
    }

    //tableau des titres des CIE
    $tab_cie['nom'] = array("123" => "Activer les services d´un serveur","187" => "Mettre en service un poste de travail ICT avec le système d’exploitation",
        "216" => "Intégrer les terminaux IoE dans une plateforme existante","293" => "Créer et publier un site Web");

    //tableau des notes de CCO des CIE
    $tab_cie['notes'] = array('123' => '5.5', '187' => '5.5', '216' => '5.5', '293' => '6');

    //calcule la moyenne totale des CIE et l'introduit dans la variable
    foreach($tab_cie['notes'] AS $key => $val)
    {
        $cie_moyenne = array_sum($tab_cie['notes'])/ sizeof($tab_cie['notes']);
    }

    //contient une moyenne calculée depuis la moyenne des modules et la moyenne des CIE
    $competences_info = ($cie_moyenne+$modules_moyenne*4)/5;

    //variable qui contient la note du TPI
    $tpi_note = 0;

    //note globale
    $note_globale = ($tpi_note*4+$competences_info*3)/10;

    echo "<h1>Bulletin ICH</h1>";

    echo "<table>";
    echo "<tr>";
        echo "<th>Modules de compétences en informatique</th>";
        foreach($tab_modules['notes'] AS $key => $moyens) {
            echo "<tr>";
            echo "<td>ICH " . $key . " - " . $tab_modules['nom'][$key]. "</td>";
            echo "<td class='moyenne'>".round($tab_modules['notes'][$key], 1)."</td>";
            echo "</tr>";
        }
    echo "</tr>";
    echo "<tr>";
        echo "<th>Cours Interentreprises</th>";
        foreach($tab_cie['notes'] AS $key => $moyens) {
            echo "<tr>";
            echo "<td>ICH " . $key . " - " . $tab_cie['nom'][$key]. "</td>";
            echo "<td class='moyenne'>".$tab_cie['notes'][$key]."</td>";
            echo "</tr>";
        }
    echo "</tr>";
    echo "<tr>";
        echo "<th>Compentences en informatique</th>"; //moyenne competences informatiques = moyenne modules + moyenne CIE
    echo "<tr>";
        echo "<td>Modules de compétences en informatique</td>";
        echo "<td class='moyenne'>".round($modules_moyenne,1)."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>Cours Interentreprises</td>";
        echo "<td class='moyenne'>".round($cie_moyenne,1)."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>Moyenne</td>";
        echo "<td class='moyenne'>".round($competences_info,1)."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<th>TPI</th>"; //moyenne TPI = note de TPI
    echo "</tr>";
    echo "<tr>";
        echo "<td>Moyenne</td>";
        echo "<td class='moyenne'>$tpi_note</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<th>Note globale</th>"; //note globale = (moyenne competences informatiques + moyenne TPI) / 2
        echo "<td class='moyenne'>".round($note_globale,1)."</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>