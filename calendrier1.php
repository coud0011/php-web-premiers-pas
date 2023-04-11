<?php
declare(strict_types=1);

// Réglage des paramètres de date en français
setlocale(LC_TIME, 'fr_FR.utf8');
// Les jours de la semaine
$semaine = ['L', 'M', 'M', 'J', 'V', 'S', 'D'];
// Le jour courant
$dateTime = new DateTimeImmutable('06/01/2023');
// Nom du mois et année
$nomMoisEtAnnee = IntlDateFormatter::formatObject($dateTime, 'MMMM yyyy');
// Numéro du premier jour du mois (1:lundi, 7:dimanche)
$numeroPremierJourDuMois =  (int) $dateTime->format('N')-1;
// Nombre de jours dans le mois
$nombreDeJoursDuMois = (int) $dateTime->format('t');

$html= <<<HTML
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="calendrier.css">
      <title>Calendrier</title>
    </head>
    <body>
        <h1>Calendrier</h1>
        <table>
HTML;
$html.="\n<tr><th colspan='7'>$nomMoisEtAnnee</th></tr>\n";
$html.="<tr>";
foreach($semaine as $day){
    $html.="<th>$day</th>";
}
$html.="</tr>\n<tr>";
$nbCases=$nombreDeJoursDuMois+$numeroPremierJourDuMois;
$nbLigne=round(($nbCases+1)/7,0);
$MonthDay=1;
$CellNumber=0;
while($CellNumber<$numeroPremierJourDuMois){
    $html.="<td></td>";
    $CellNumber++;
}
while($CellNumber<$nbCases){
    $dayN=$CellNumber%7;
    $class="";
    if($dayN==5 || $dayN==6){
        $class=" class='weekend'";
    }
    $html.="<td$class>$MonthDay</td>";
    if($dayN==6){
        $html.="</tr>\n<tr>";
    }
    $CellNumber++;
    $MonthDay++;
}
while($CellNumber<$nbLigne*7){
    $html.="<td></td>";
    $CellNumber++;
}
$html.="</tr>\n";




$html.= <<<HTML
        </table>
    </body>
</html>
HTML;

echo $html;