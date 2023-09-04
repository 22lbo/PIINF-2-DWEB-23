<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Results Page</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
        }
        table, th, td{
            border: 2px solid lightgray;
        }
        table {
            background-color: #FFFCF9;
            width: auto;
            //margin-bottom: 20px;
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
    $tab['ci']['modules'][106]['nom'] = 'Interroger, traiter et assurer la maintenance des bases de données';
    $tab['ci']['modules'][106]['note'] = '6';
    $tab['ci']['modules'][106]['date'] = '2023-06-23';
    $tab['ci']['modules'][117]['nom'] = "Mettre en place l’infrastructure informatique et réseau d’une petite entreprise";
    $tab['ci']['modules'][117]['note'] = '5.5';
    $tab['ci']['modules'][117]['date'] = '2023-01-19';
    $tab['ci']['modules'][122]['nom'] = "Automatiser des procédures à l’aide de scripts";
    $tab['ci']['modules'][122]['note'] = '5';
    $tab['ci']['modules'][122]['date'] = '2023-06-20';
    $tab['ci']['modules'][162]['nom'] = "Analyser et modéliser des données";
    $tab['ci']['modules'][162]['note'] = '5';
    $tab['ci']['modules'][162]['date'] = '2023-01-18';
    $tab['ci']['modules'][164]['nom'] = "Créer des bases de données et y insérer des données";
    $tab['ci']['modules'][164]['note'] = '5.5';
    $tab['ci']['modules'][164]['date'] = '2023-04-05';
    $tab['ci']['modules'][231]['nom'] = "Appliquer la protection et la sécurité des données";
    $tab['ci']['modules'][231]['note'] = '5.5';
    $tab['ci']['modules'][231]['date'] = '2023-06-19';
    $tab['ci']['modules'][319]['nom'] = "Concevoir et implémenter des applications";
    $tab['ci']['modules'][319]['note'] = '4';
    $tab['ci']['modules'][319]['date'] = '2023-01-20';
    $tab['ci']['modules'][431]['nom'] = "Exécuter des mandats de manière autonome dans son propre environnement professionnel";
    $tab['ci']['modules'][431]['note'] = '4.5';
    $tab['ci']['modules'][431]['date'] = '2023-01-16';

    $tab['cie']['desc'] = 'Cours Interentreprise';
    $tab['cie']['ponderation'] =20;
    $tab['cie']['modules'][123]['nom'] = 'Activer les services d´un serveur';
    $tab['cie']['modules'][123]['note'] = '5.5';
    $tab['cie']['modules'][123]['date'] = '2023-05-08';
    $tab['cie']['modules'][187]['nom'] = 'Mettre en service un poste de travail ICT avec le système d’exploitation';
    $tab['cie']['modules'][187]['note'] = '5.5';
    $tab['cie']['modules'][187]['date'] = '2022-09-16';
    $tab['cie']['modules'][216]['nom'] = 'Intégrer les terminaux IoE dans une plateforme existante';
    $tab['cie']['modules'][216]['note'] = '5.5';
    $tab['cie']['modules'][216]['date'] = '2023-03-16';
    $tab['cie']['modules'][293]['nom'] = 'Créer et publier un site Web';
    $tab['cie']['modules'][293]['note'] = '6';
    $tab['cie']['modules'][293]['date'] = '2022-11-10';

    $tab['tpi']['desc'] = "TPI";
    $tab['tpi']['ponderation'] = 60;
    $tab['tpi']['modules'][0]['nom'] = "Travail Pratique Individuel";
    $tab['tpi']['modules'][0]['note'] = 1;
    $tab['tpi']['modules'][0]['date'] = "2026-??-??";

    $tab['comp_info']['desc'] = "Moyenne de l'ensemble des competences en informatique";
    $tab['comp_info']['ponderation'] = 40;

    function insuff ($arg1, $arg2, $arg3) {
        if($arg1 < 4)
            echo "<td class='$arg2 $arg3'>".$arg1."</td>";
        else
            echo "<td class='$arg2'>".$arg1."</td>";
    }

    echo"<h1>Bulletin ICH</h1>";
    echo "<table>";
        foreach ($tab AS $abr_domaine => $domaine) {
            if ($abr_domaine == "comp_info")
                break;

            echo "<tr><th colspan='4'>".$domaine['desc']."</th></tr>";
            $nb_notes = 0;
            $somme_notes = 0;

            foreach ($domaine['modules'] as $key => $module) {
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
            echo "<td colspan=3>Moyenne :</td>";
            insuff($moyenne, 'moyenne_gen', 'insuff');
            $tab[$abr_domaine]['moyenne'] = $moyenne;
            echo "</tr>";
        }
    echo"</table>";

    echo "<table>";
    echo "<tr><th colspan='4'>Moyennes</th></tr>";
        $comp_info = 0;
        foreach ($tab AS $key => $domaine) {
            if ($key == "tpi" || $key == "comp_info")
                break;

            echo "<tr>";
                echo "<td>".$domaine['desc']."</td>";
                echo "<td>".$domaine['ponderation']."%</td>";
                insuff($domaine['moyenne'], 'moyenne_note', 'insuff');
            echo "</tr>";
            $comp_info += ($tab[$key]['moyenne'] * $tab[$key]['ponderation']);
        }
        echo "<tr>";
            echo "<td colspan='2'>Ensemble des competences en informatique :</td>";
            $tab['comp_info']['moyenne'] = round(($comp_info / 100), 1);
            insuff($tab['comp_info']['moyenne'], 'moyenne_gen', 'insuff');
        echo "</tr>";

    $note_globale = 0;
    foreach ($tab as $key => $domaine) {
        if ($key == "tpi" || $key == "comp_info") {
            echo "<tr>";
            echo "<td>".$domaine['desc']."</td>";
            echo "<td>".$domaine['ponderation']."%</td>";
            insuff($domaine['moyenne'], 'moyenne_note', 'insuff');
            echo "</tr>";
            $note_globale += ($tab[$key]['moyenne'] * $tab[$key]['ponderation']);
        }
    }
    echo "<tr>";
        echo "<td colspan =2>Note globale :</td>";
        $tab['note_globale'] = round(($note_globale / 100),1);
        insuff($tab['note_globale'], 'moyenne_gen', 'insuff');
    echo "</tr>";
    echo "<tr>";
        echo "<td colspan =2>Etat de CFC</td>";
        if($tab['note_globale'] < 4)
            echo "<td class='col' style='background-color:#ff5a5a'>".$tab['etat_de_cfc'] = "Echec"."</td>";
        else
            echo "<td class='col' style='background-color:#82ff82'>".$tab['etat_de_cfc'] = "Réussi"."</td>";
    echo "<tr>";
echo "</table>";

    echo "<pre>";
    print_r($tab);
    echo "</pre>";
?>
</body>
</html>