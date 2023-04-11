<?php
declare(strict_types=1);

$toDate=new DateTimeImmutable();
$year=(int) IntlDateFormatter::formatObject($toDate,'YYYY');

$months=[1=>'janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décemebre'];
$years=array();
for($i=1900;$i<=$year+1;$i++){
    $years[$i]=$i;
}

$html= <<<HTML
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ChoixMoisAnnee.css">
        <title>Choix d'un mois et d'une année</title>
    </head>
    <body>
        <h1>Choix d'un mois et d'une année</h1>
        <div>Choisissez un mois et une année
            <form name='ChoiceMonthYear' action='calendrier3.php' method="GET">
HTML;
$html.="\n              <label>\n                 <select name='month' required>\n";
foreach($months as $monthNumber => $month){
    $html.="                     <option value='$monthNumber'>$month</option>\n";
}
$html.="                   </select>\n              </label>\n";
$html.="              <label>\n                 <select name='year' required>\n";
foreach($years as $yearNumber => $year){
    $html.="                     <option value='$yearNumber'>$year</option>\n";
}
$html.="                   </select>\n              </label>";
$html.= <<<HTML
            <label><input type='submit' value='Voir le calendrier'></label>
        </form>
    </body>
</html>
HTML;
echo $html;
