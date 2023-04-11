<?php
$dayList=[1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
$day = "n'est pas très clair...";
if (isset($_POST['Day']) && !empty($_POST['Day']) && $_POST['Day']!='') {
    preg_replace('@<(.+)[^>]*>.*?@is', '', $_POST['Day']);
    $day = "s'est porté sur ".$dayList[$_POST['Day']];
}
$day=strip_tags($day);


$html= <<<HTML
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>Voir le jour</title>
    </head>
    <body>
        <h1>Le jour de la semaine choisi</h1>
        <div>Votre choix  
HTML;
$html.="$day</div>\n";
$html.= <<<HTML
    </body>
</html>
HTML;
echo $html;


