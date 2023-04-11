<?php
declare(strict_types=1);
require_once("calendrier.function.php");
// Réglage des paramètres de date en français
setlocale(LC_TIME, 'fr_FR.utf8');
// Le jour courant
$date = new DateTimeImmutable();
$mois=(int) IntlDateFormatter::formatObject($date,'M');
$annee=(int) IntlDateFormatter::formatObject($date,'YYYY');
$htmlT= <<<HTML
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="calendrier.css">
      <title>Calendrier</title>
    </head>
    <body>
        <h1>Calendrier</h1>
HTML;
$htmlT.=calendrier($mois,$annee);
$htmlT.=  <<<HTML
    </body>
</html>
HTML;
echo $htmlT;