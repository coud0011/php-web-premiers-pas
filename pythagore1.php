<?php
const INDICE_MAX = 20;
$html= <<<HTML
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="pythagore.css">
      <title>Table de Pythagore</title>
    </head>
    <body>
        <h1>Table de Pythagore</h1>
        <table>
            <tr><th>&times;</th>
HTML;
for($i=0;$i<=INDICE_MAX;$i++){
    $html.="<th>$i</th>";
}
$html.="</tr>";
for($i=0;$i<=INDICE_MAX;$i++){
    $html.="<tr><th scope='row'>$i</th>";
    for($j=0;$j<=INDICE_MAX;$j++){
        $n=$i*$j;
        $html.="<td>$n</td>";
    }
    $html.="</tr>";
}
$html.= <<<HTML
        </table>
    </body>
</html>
HTML;
echo $html;

