# Workshop
Decouverte de PHP symfony

Dans ce Workshop vous allez apprendre comment créer une todo list avec un systeme de login/logout en PHP Symfony !

      ---> Par définition une to-do list est une liste de tâches à réaliser <---

# Prérequis :

Instalation de PHP : https://www.geeksforgeeks.org/how-to-install-php-on-linux

Instalation de Symfony : https://symfony.com/download

Instalation de MySQL : https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04 

Doc fedora : https://tecadmin.net/install-mysql-8-on-fedora
- Doctrine (composer require symfony/orm-pack)

Créer un nouveau projet Symfony.
Configurer la base de données.
Implémenter les opérations CRUD et un systeme de connexion avec un role admin.

Pour vous aidez voici les etapes a suivre pour la création de votre projet symfony : 

- Installation des composants requis : Installez Symfony, Doctrine et tout autre composant nécessaire à l'application.
 
- Créer un nouveau projet Symfony : Utilisez la ligne de commande pour créer un nouveau projet Symfony en utilisant la commande "composer create-project symfony/website-skeleton".

- Création de votre base de donnée : Modification du .env (DATABASE_URL=mysql://root:root@127.0.1:3306/"Nom de la db") et lancer la commande php bin/console doctrine:database:create

- Création d'une entiter Task : Créez l'entité Task en utilisant les commandes Doctrine pour générer les fichiers nécessaires et les classes associées.

- Création d'une entiter User : Comment pour l'entiter Task ajouter les composant necessaire a la création d'un user (Id, Username, mot de passe)

- Créer les contrôleurs : Créez les contrôleurs pour les opérations CRUD des tâches. Définissez les méthodes pour les opérations de création, lecture, mise à jour et suppression des tâches.

- Créer les vues qui vous permete de visualité votre systéme CRUD : Créez les vues en utilisant Twig pour afficher les tâches et les formulaires associés.

- Aprés chaque ajout d'entiter pour pouvoir update la base de donnée taper la commande : php bin/console make:migration , php bin/console doctrine:migrations:migrate

Pour le lancement de votre serveur en local : 
- php -S localhost:8000 -t public/
- Localhost:8000

**A vos clavier!**
