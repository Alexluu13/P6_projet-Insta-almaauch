# P6_insta_almaauch

Ce projet collectif à pour objectif de développer une plateforme de micro-blogging de photos. Projet sur deux semaines. Les utilisatrices pourront créer des posts associant une image avec un texte, et les retrouver regroupés au sein d’une page personnelle. Elles disposeront pour cela d’une page de connexion et d’une page de profil, éditable. 

MVC est une architecture logicielle simple consistant à organiser le code en fonction de son utilité, en trois catégories :
- Modèle (*modèle*) pour la gestion des données.
- Vue (*view*) pour la présentation de l’interface graphique.
- Contrôleur (*controller*) pour la logique concernant les actions effectuées par l’utilisateur.

## Outils:

- Laravel, PHP
- Docker, MySql
- Slack, Notion, Miro

<p><img align="center" alt="" src="https://github.com/Alexluu13/P6_projet-Insta-almaauch/blob/master/insta_almaauch1.png"/></p>
<p><img align="center" alt="" src="https://github.com/Alexluu13/P6_projet-Insta-almaauch/blob/master/insta_almaauch2.png"/></p>
<p><img align="center" alt="" src="https://github.com/Alexluu13/P6_projet-Insta-almaauch/blob/master/insta_almaauch3.png"/></p>

## Pour démarrer le serveur et docker:

Dans example-app, dans deux terminaux différents. 

sail up (Démarrer le conteneur Docker.)

sail npm run dev (Pour lancer le serveur.)

Démarrer docker.

Control C pour arrêter les serveurs.

## Pour manipuler la base de donées:

- use example_app;
- show tables;
- desc users;
- drop table “nom de la table”
- select * from users;
