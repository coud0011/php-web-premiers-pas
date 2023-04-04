<?php

declare(strict_types=1);

$titre = "Table de multiplication de 12";

$html=<<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="multiplication2.css">
    <meta charset="utf-8">
    <title>{$titre}</title>
  </head>
  <body>
    <h1>{$titre}</h1>
    <table>

HTML;
for($i=0; $i<11; $i++){
    $j=12*$i;
    $html .= "<tr><td>$i</td> <td>&times;</td> <td>12</td> <td>=</td> <td>$j</td></tr>\n";
}

$html .= <<<HTML
    </table>
  </body>
</html>
HTML;

echo $html;

