- Saisie de l'url http://localhost:8000/nombre.html
- Ouverture de la connection par le client
    - Préparation d'une requête HTTP GET par mon navigateur
    - Lancement de la requête
    - Requête reçue par localhost:8000
        - Traitement de la requête
        - Le serveur cherche la ressource demandée : "/nombre.php"
        - La ressource contient du code PHP
        - Demande d'exécution du code PHP
        - Le module PHP exécute le script et retourne la charge utile avec echo
    - Construction de la réponse HTTP,
      celle-ci est envoyée avec le code 200
- Fermeture de la connection par le serveur
- Dans le formulaire affiché je rentre 42 et clique sur le submit
- L'URL se transforme donc en rajoutant ?n=42 après
- Réouverture de la connection par le navigateur
  - Préparation de la requête HTTP GET contenue dans le formulaire avec la valeur 42 inscrite pour le fichier multiplication3.php
  - Lancement de la requête
  - Requête reçue par localhost:8000
    - Traitement de la requête
    - Le serveur cherche la ressource demandée : "/multiplication.php"
    - La ressource contient du php
    - Demande d'exécution du code PHP
    - Le module PHP exécute le script et retourne la charge utile avec echo
  - Construction de la réponse HTTP, celle-ci est envoyée avec le code 200
- Fermeture de la connection par le navigateur
- Dans la réponse html, il y a un link avec une feuille de style en css :  
  multiplication2.css
-  Le navigateur rouvre donc la connection avec le serveur
    - Il prépare une deuxième requête
    - Envoi de la requête HTTP GET pour le fichier multiplication2.css
    - Requête reçue par localhost:8000
        - Traitement de la requête
        - Le serveur cherche la ressource demandée : "/multiplication.css"
    - Construction de la réponse HTTP, celle-ci est envoyée avec le code 200
- Fermeture de la connection par le serveur
- Le navigateur rouvre la connection pour demander la présence d'une icone
- Mais le serveur n'en a pas retour : 404 Not Found
- Le serveur referme la connection
- Le navigateur affiche le résultat




Dans la partie suivante, on a pu constater que l'on peut
modifer la valeur du nombre directement dans l'url.  

Si on entre quelque chose qui n'est pas un nombre,
on obtient une erreur de type.  
En effet, on a besoin d'un nombre pour les calculs.  
is_int() ne sera d'aucune aide car c'est une chaîne qui est renvoyée.
Utilisation de ctype_digit()  

Si on enlève la condition ?n="...", on a encore une erreur
car n n'est pas défini au début.

