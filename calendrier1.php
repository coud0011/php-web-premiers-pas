<?php
declare(strict_types=1);

// Réglage des paramètres de date en français
setlocale(LC_TIME, 'fr_FR.utf8');
// Les jours de la semaine
$semaine = ['L', 'M', 'M', 'J', 'V', 'S', 'D'];
// Le jour courant
$dateTime = new DateTimeImmutable();
// Nom du mois et année
$nomMoisEtAnnee = IntlDateFormatter::formatObject($dateTime, 'MMMM yyyy');
// Numéro du premier jour du mois (1:lundi, 7:dimanche)
$numeroPremierJourDuMois =  (int) $dateTime->format('N');
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
$html.="<tr><th colspan='7'>$nomMoisEtAnnee</th></tr>\n";
$html.="<tr>";
foreach($semaine as $day){
    $html.="<th>$day</th>";
}
$html.="</tr>\n";

$nbLigne=round(($nombreDeJoursDuMois+$numeroPremierJourDuMois)/7,0);
for($i=1; $i<$nbLigne; $i++){

}



$html.= <<<HTML
        </table>
    </body>
</html>
HTML;

echo $html;