<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bulletin de notes v2</title>
    <meta charset="UTF-8">
    <style>
        /** {
            cursor: url("logo-swiss-2x32.png"), auto;
        }*/
        body {
            font-family: sans-serif;
        }
        table, th, td {
            border: 2px solid lightgray;
        }
        table {
            background-color: #FFFCF9;
            width: auto;
            margin-bottom: 20px;
        }
        th {
            background-color: lightgray;
            text-align: left;
            font-size: 20px;
        }
        .note {
            background-color: #ece7be;
            text-align: center;
        }
        .moyenne_note {
            background-color: #ece7be;
            text-align: center;
        }
        .moyenne_gen {
            text-align: center;
        }
        .insuff {
            background-color: #ff5a5a;
        }
    </style>
</head>
<body>
<?php
    $tab['ci']['desc'] = 'Competences en informatique';
    $tab['ci']['ponderation'] =80;
    $tab['ci']['modules'][106]['nom'] = "Interroger, traiter et assurer la maintenance des bases de données";
    $tab['ci']['modules'][106]['note'] = 6;
    $tab['ci']['modules'][106]['date'] = '2023-06-23';
    $tab['ci']['modules'][114]['nom'] = "Mettre en œuvre des systèmes de codification, de compression et d’encryptage";
    $tab['ci']['modules'][114]['note'] = null;
    $tab['ci']['modules'][114]['date'] = '';
    $tab['ci']['modules'][117]['nom'] = "Mettre en place l’infrastructure informatique et réseau d’une petite entreprise";
    $tab['ci']['modules'][117]['note'] = 5.5;
    $tab['ci']['modules'][117]['date'] = '2023-01-19';
    $tab['ci']['modules'][122]['nom'] = "Automatiser des procédures à l’aide de scripts";
    $tab['ci']['modules'][122]['note'] = 5;
    $tab['ci']['modules'][122]['date'] = '2023-06-20';
    $tab['ci']['modules'][162]['nom'] = "Analyser et modéliser des données";
    $tab['ci']['modules'][162]['note'] = 5;
    $tab['ci']['modules'][162]['date'] = '2023-01-18';
    $tab['ci']['modules'][164]['nom'] = "Créer des bases de données et y insérer des données";
    $tab['ci']['modules'][164]['note'] = 5.5;
    $tab['ci']['modules'][164]['date'] = '2023-04-05';
    $tab['ci']['modules'][165]['nom'] = "Utiliser des bases de données NoSQL";
    $tab['ci']['modules'][165]['note'] = null;
    $tab['ci']['modules'][165]['date'] = '';
    $tab['ci']['modules'][183]['nom'] = "Implémenter la sécurité d'une application";
    $tab['ci']['modules'][183]['note'] = null;
    $tab['ci']['modules'][183]['date'] = '';
    $tab['ci']['modules'][231]['nom'] = "Appliquer la protection et la sécurité des données";
    $tab['ci']['modules'][231]['note'] = 5.5;
    $tab['ci']['modules'][231]['date'] = '2023-06-19';
    $tab['ci']['modules'][241]['nom'] = "Initialiser des solutions ICT innovantes";
    $tab['ci']['modules'][241]['note'] = null;
    $tab['ci']['modules'][241]['date'] = '';
    $tab['ci']['modules'][245]['nom'] = "Mettre en œuvre des solutions ICT innovantes";
    $tab['ci']['modules'][245]['note'] = null;
    $tab['ci']['modules'][245]['date'] = '';
    $tab['ci']['modules'][254]['nom'] = "Décrire des processus métier dans son propre environnement professionnel";
    $tab['ci']['modules'][254]['note'] = null;
    $tab['ci']['modules'][254]['date'] = '';
    $tab['ci']['modules'][306]['nom'] = "Réaliser de petits projets dans son propre environnement professionnel";
    $tab['ci']['modules'][306]['note'] = null;
    $tab['ci']['modules'][306]['date'] = '';
    $tab['ci']['modules'][319]['nom'] = "Concevoir et implémenter des applications";
    $tab['ci']['modules'][319]['note'] = 4;
    $tab['ci']['modules'][319]['date'] = '2023-01-20';
    $tab['ci']['modules'][320]['nom'] = "Programmer orienté objet";
    $tab['ci']['modules'][320]['note'] = null;
    $tab['ci']['modules'][320]['date'] = '';
    $tab['ci']['modules'][321]['nom'] = "Programmer des systèmes distribués";
    $tab['ci']['modules'][321]['note'] = null;
    $tab['ci']['modules'][321]['date'] = '';
    $tab['ci']['modules'][322]['nom'] = "Concevoir et implémenter des interfaces utilisateur";
    $tab['ci']['modules'][322]['note'] = null;
    $tab['ci']['modules'][322]['date'] = '';
    $tab['ci']['modules'][323]['nom'] = "Programmer de manière fonctionnelle";
    $tab['ci']['modules'][323]['note'] = null;
    $tab['ci']['modules'][323]['date'] = '';
    $tab['ci']['modules'][324]['nom'] = "Prendre en charge des processus DevOps avec des outils logiciels";
    $tab['ci']['modules'][324]['note'] = null;
    $tab['ci']['modules'][324]['date'] = '';
    $tab['ci']['modules'][346]['nom'] = "Concevoir et réaliser des solutions cloud";
    $tab['ci']['modules'][346]['note'] = null;
    $tab['ci']['modules'][346]['date'] = '';
    $tab['ci']['modules'][347]['nom'] = "Utiliser un service avec des conteneurs";
    $tab['ci']['modules'][347]['note'] = null;
    $tab['ci']['modules'][347]['date'] = '';
    $tab['ci']['modules'][426]['nom'] = "Développer un logiciel avec des méthodes agiles";
    $tab['ci']['modules'][426]['note'] = null;
    $tab['ci']['modules'][426]['date'] = '';
    $tab['ci']['modules'][431]['nom'] = "Exécuter des mandats de manière autonome dans son propre environnement professionnel";
    $tab['ci']['modules'][431]['note'] = 4.5;
    $tab['ci']['modules'][431]['date'] = '2023-01-16';
    $tab['ci']['modules'][450]['nom'] = "Tester des applications";
    $tab['ci']['modules'][450]['note'] = null;
    $tab['ci']['modules'][450]['date'] = '';

    $tab['cie']['desc'] = 'Cours Interentreprise';
    $tab['cie']['ponderation'] =20;
    $tab['cie']['modules'][107]['nom'] = "Mettre en œuvre des solutions ICT avec la technologie blockchain";
    $tab['cie']['modules'][107]['note'] = null;
    $tab['cie']['modules'][107]['date'] = '';
    $tab['cie']['modules'][109]['nom'] = "Exploiter et surveiller des services dans le cloud public";
    $tab['cie']['modules'][109]['note'] = null;
    $tab['cie']['modules'][109]['date'] = '';
    $tab['cie']['modules'][110]['nom'] = "Analyser et représenter des données avec des outils";
    $tab['cie']['modules'][110]['note'] = null;
    $tab['cie']['modules'][110]['date'] = '';
    $tab['cie']['modules'][123]['nom'] = "Activer les services d'un serveur";
    $tab['cie']['modules'][123]['note'] = 5.5;
    $tab['cie']['modules'][123]['date'] = '2023-05-08';
    $tab['cie']['modules'][185]['nom'] = "Analyser et implémenter des mesures visant à assurer la sécurité informatique des PME";
    $tab['cie']['modules'][185]['note'] = null;
    $tab['cie']['modules'][185]['date'] = '';
    $tab['cie']['modules'][187]['nom'] = "Mettre en service un poste de travail ICT avec le système d’exploitation";
    $tab['cie']['modules'][187]['note'] = 5.5;
    $tab['cie']['modules'][187]['date'] = '2022-09-16';
    $tab['cie']['modules'][190]['nom'] = "Mettre en place et exploiter une plateforme de virtualisation";
    $tab['cie']['modules'][190]['note'] = null;
    $tab['cie']['modules'][190]['date'] = '';
    $tab['cie']['modules'][210]['nom'] = "Utiliser un cloud public pour des applications";
    $tab['cie']['modules'][210]['note'] = null;
    $tab['cie']['modules'][210]['date'] = '';
    $tab['cie']['modules'][216]['nom'] = "Intégrer les terminaux IoE dans une plateforme existante";
    $tab['cie']['modules'][216]['note'] = 5.5;
    $tab['cie']['modules'][216]['date'] = '2023-03-16';
    $tab['cie']['modules'][217]['nom'] = "Concevoir, planifier et mettre en place un service pour l’IoE";
    $tab['cie']['modules'][217]['note'] = null;
    $tab['cie']['modules'][217]['date'] = '';
    $tab['cie']['modules'][223]['nom'] = "Réaliser des applications multi-utilisateurs orientées objets";
    $tab['cie']['modules'][223]['note'] = null;
    $tab['cie']['modules'][223]['date'] = '';
    $tab['cie']['modules'][248]['nom'] = "Réaliser des solutions ICT avec des technologies actuelles";
    $tab['cie']['modules'][248]['note'] = null;
    $tab['cie']['modules'][248]['date'] = '';
    $tab['cie']['modules'][259]['nom'] = "Développer des solutions ICT avec le machine learning";
    $tab['cie']['modules'][259]['note'] = null;
    $tab['cie']['modules'][259]['date'] = '';
    $tab['cie']['modules'][293]['nom'] = "Créer et publier un site Web";
    $tab['cie']['modules'][293]['note'] = 6;
    $tab['cie']['modules'][293]['date'] = '2022-11-10';
    $tab['cie']['modules'][294]['nom'] = "Réaliser le front-end d'une application Web interactive";
    $tab['cie']['modules'][294]['note'] = null;
    $tab['cie']['modules'][294]['date'] = '';
    $tab['cie']['modules'][295]['nom'] = "Réaliser le back-end pour des applications";
    $tab['cie']['modules'][295]['note'] = null;
    $tab['cie']['modules'][295]['date'] = '';
    $tab['cie']['modules'][335]['nom'] = "Réaliser une application pour mobile";
    $tab['cie']['modules'][335]['note'] = null;
    $tab['cie']['modules'][335]['date'] = '';

    $tab['tpi']['desc'] = "TPI";
    $tab['tpi']['ponderation'] = 60;
    $tab['tpi']['modules'][0]['nom'] = "Travail Pratique Individuel";
    $tab['tpi']['modules'][0]['note'] = null;
    $tab['tpi']['modules'][0]['date'] = "";

    $tab['comp_info']['desc'] = "Moyenne de l'ensemble des competences en informatique";
    $tab['comp_info']['ponderation'] = 40;


    function insuff ($array, $class1, $class2) {
        if($array< 4)
            echo "<td class='$class1 $class2'>".$array."</td>";
        else
            echo "<td class='$class1'>".$array."</td>";
    }

    echo"<h1>Bulletin ICH</h1>";
    echo "<table>";
        foreach ($tab AS $abr_domaine => $domaine) {
            if ($abr_domaine == "comp_info")
                break;

            echo "<tr><th colspan='4'>".$domaine['desc']."</th></tr>";
            $nb_notes = 0;
            $somme_notes = 0;

            foreach ($domaine['modules'] AS $key => $module) {
                echo "<tr>";
                if ($abr_domaine != "tpi") {
                    echo "<td>$key</td>";
                    echo "<td>".$module['nom']."</td>";
                }
                else
                    echo "<td colspan='2'>".$module['nom']."</td>";
                echo "<td>".$module['date']."</td>";
                insuff($module['note'], 'note', 'insuff');
                echo "</tr>";
                $nb_notes++;
                $somme_notes += $module['note'];
            }
            $moyenne = (round(($somme_notes / $nb_notes)*2)/2);
            echo "<tr>";
            echo "<td colspan=3>Moyenne</td>";
            insuff($moyenne, 'moyenne_gen', 'insuff');
            $tab[$abr_domaine]['moyenne'] = $moyenne;
            echo "</tr>";
        }
    echo"</table>";

    echo "<table>";
        $comp_info = 0;
        $total_pond = 0;
        foreach ($tab AS $key => $domaine) {
            if ($key == "tpi" || $key == "comp_info")
                break;

            echo "<tr>";
                echo "<td>".$domaine['desc']."</td>";
                echo "<td>".$domaine['ponderation']."%</td>";
                insuff($domaine['moyenne'], 'moyenne_note', 'insuff');
            echo "</tr>";
            $comp_info += ($tab[$key]['moyenne'] * $tab[$key]['ponderation']);
            $total_pond += $tab[$key]['ponderation'];
        }
        echo "<tr>";
            echo "<td colspan='2'>Ensemble des competences en informatique</td>";
            $tab['comp_info']['moyenne'] = round(($comp_info / $total_pond), 1);
            insuff($tab['comp_info']['moyenne'], 'moyenne_gen', 'insuff');
        echo "</tr>";

        $note_globale = 0;
        $total_pond = 0;
        foreach ($tab AS $key => $domaine) {
            if ($key == "tpi" || $key == "comp_info") {
                echo "<tr>";
                echo "<td>".$domaine['desc']."</td>";
                echo "<td>".$domaine['ponderation']."%</td>";
                insuff($domaine['moyenne'], 'moyenne_note', 'insuff');
                echo "</tr>";
                $note_globale += ($tab[$key]['moyenne'] * $tab[$key]['ponderation']);
                $total_pond += $tab[$key]['ponderation'];
            }
        }
        echo "<tr>";
            echo "<td colspan =2>Note globale</td>";
            $tab['note_globale'] = round(($note_globale / $total_pond),1);
            insuff($tab['note_globale'], 'moyenne_gen', 'insuff');
        echo "</tr>";
        echo "<tr>";
            echo "<td colspan =2>Etat de CFC</td>";
            if($tab['note_globale'] < 4)
                echo "<td style='background-color:#ff5a5a'>".$tab['etat_de_cfc'] = "Echec"."</td>";
            else
                echo "<td style='background-color:#82ff82'>".$tab['etat_de_cfc'] = "Réussi"."</td>";
        echo "<tr>";
    echo "</table>";

    echo "<pre>";
    print_r($tab);
    echo "</pre>";
?>
</body>
</html>