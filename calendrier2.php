<?php
declare(strict_types=1);
require_once("calendrier.function.php");
// Réglage des paramètres de date en français
setlocale(LC_TIME, 'fr_FR.utf8');
// Le jour courant
$date = new DateTimeImmutable();
$mois=(int) IntlDateFormatter::formatObject($date,'M');
$annee=(int) IntlDateFormatter::formatObject($date,'YYYY');
$html=calendrier($mois,$annee);
echo $html;