<?php

declare(strict_types=1);

if (!session_id()) {
    session_start();
} // Ça ne nous sert à rien, mais c'est un comportement classique pour une application Web
preg_replace('@<(.+)[^>]*>.*?@is', '', $_GET['nom']);
$nom = "inconnu";
if (isset($_GET['nom']) && !empty($_GET['nom']) && $_GET['nom']!='') {
    $nom = $_GET['nom'];
}
$nom=strip_tags($nom);

$html = <<<HTML
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>Salutations</title>
    </head>
    <body>
        <h1>Bonjour&nbsp;!</h1>
        <p>Bonjour {$nom}, j'espère que vous passez une bonne journée.
    </body>
</html>
HTML;

echo $html;
