<?php

declare(strict_types=1);

$dayList=[1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

$html = <<<HTML
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <style>label{
                display:block
      }</style>
      <title>Liste déroulante</title>
    </head>
    <body>
        <h1>Les jours de la semaine</h1>
        <form name='formulaire' action='jour.php' method='POST'>
HTML;
foreach($dayList as $dayNumber => $dayN){
    $html .="<label><input name='Day' type='radio' value='$dayNumber'>$dayN</label>\n";
}
$html.= <<<HTML
            </label>
            <label>
                <input type='submit' value='Choisir ce jour'>
            </label>
        </form>
    </body>
</html>
HTML;
echo $html;
