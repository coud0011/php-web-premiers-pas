<?php

declare(strict_types=1);

$titre = "Table de multiplication de 12";

$html=<<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
  </head>
  <body>
    <h1>{$titre}</h1>

HTML;
for($i=0; $i<11; $i++){
    $j=12*$i;
    $html .= "<div>$i &times; 12 = $j</div>\n";
}

$html .= <<<HTML
  </body>
</html>
HTML;

echo $html;

