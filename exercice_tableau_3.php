<?php
$tab[0]['date'] = '24.09.2023';
$tab[0]['jour'] = 'Dimanche';
$tab[1]['date'] = '25.09.2023';
$tab[1]['jour'] = 'Lundi';
$tab[2]['date'] = '26.09.2023';
$tab[2]['jour'] = 'Mardi';
$tab[3]['date'] = '27.09.2023';
$tab[3]['jour'] = 'Mercredi';
$tab[4]['date'] = '28.09.2023';
$tab[4]['jour'] = 'Jeudi';
$tab[5]['date'] = '29.09.2023';
$tab[5]['jour'] = 'Vendredi';
$tab[6]['date'] = '30.09.2023';
$tab[6]['jour'] = 'Samedi';

echo "<table>";
foreach($tab AS $key => $day)
{
    echo "<tr>";
    echo "<td>".$day['jour']." : ".$day['date']."<br></td>";
    echo "</tr>";
}
echo "</table>";
?>