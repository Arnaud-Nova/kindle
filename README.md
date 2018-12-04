# Exo-Kindle
J'aurais besoin de fieffés réparateurs de liseuses pour réparer la mienne ! Si vous connaissez un peu de PHP, de JS et de CSS, vous êtes la personne qu'il me faut !
Son écran ne m'affiche plus rien, je vais donc vous décrire son comportement avant la panne.

## Etape 1 - PHP
Par défaut elle m'affiche une [liste de couvertures de livres](https://github.com/O-clock-Teach/Exo-Kindle/blob/master/resultat/home.png).
Les livres sont récupérés depuis l'array `$books` du fichier *books.php*. Les images dans le dossier images.
Vous n'avez *jamais besoin d'écrire le nom des livres*, juste les récupérer automatiquement depuis l'array.

## Etape 2 - PHP
Au clic sur une couverture, je reviens sur [la page](https://github.com/O-clock-Teach/Exo-Kindle/blob/master/resultat/livre.png) avec un paramètre GET qui me permet de savoir quel livre charger.
Les livres sont stockés dans le dossier du même nom.

## Etape 3 - JS
Je veux aussi pouvoir alterner entre deux affichages de mes livres : l'affichage des couvertures, 
déjà fait, et un [affichage détaillé](https://github.com/O-clock-Teach/Exo-Kindle/blob/master/resultat/liste.png)
Cette alternance se fait au clic sur un bouton "Changer de vue".

Pour toutes les étapes, vous devrez aussi utiliser CSS afin que ça comme le plus possible aux [résultats attendus](https://github.com/O-clock-Teach/Exo-Kindle/tree/master/resultat)
La correction est disponible sur la branche du même nom !
