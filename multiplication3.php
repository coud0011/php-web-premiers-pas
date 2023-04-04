<?php

declare(strict_types=1);

$n=$_GET['n'];
$titre = "Table de multiplication de $n";


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
    $product=$n*$i;
    $html .= "<tr><td>$i</td> <td>&times;</td> <td>$n</td> <td>=</td> <td>$product</td></tr>\n";
}

$html .= <<<HTML
    </table>
  </body>
</html>
HTML;

echo $html;

