- L'utilisateur va d'abord choisir un jour puis cliquer sur Choisir ce jour.
- Le serveur reçois donc un requête POST avec le numéro du jour,
le programme associe ce numéro au jour et créé le fichier html
correspondant.
- le fichier est renvoyé à l'utilisateur.


- Pour tester l'absence de valeur du POST, il suffit d'accéder
directement à jour.php sans passer par les scripts choisir jour.
- Cela renvoie donc "Votre choix n'est pas très clair..."

- Pour tester l'envoi de Day=14, il faut juste mettre ?Day=14 après l'adresse.
- Cela remplace automatiquement la valeur.