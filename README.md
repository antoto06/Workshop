# Workshop
**Decouverte de PHP symfony**

Création de votre propre système de gestion des tâches avec PHP Symfony.

**installation des composant requis :
- PHP (https://www.geeksforgeeks.org/how-to-install-php-on-linux/)
- Symfony (https://symfony.com/download)
- Mysql (https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04) Doc fedora (https://tecadmin.net/install-mysql-8-on-fedora/)
- Doctrine (composer require symfony/orm-pack)

Créer un nouveau projet Symfony.
Configurer la base de données.
Implémenter les opérations CRUD.

Pour vous aidez voici les etapes a suivre pour la création de votre projet symfony : 

- Installation des composants requis : Installez Symfony, Doctrine et tout autre composant nécessaire à l'application.
 
- Créer un nouveau projet Symfony : Utilisez la ligne de commande pour créer un nouveau projet Symfony en utilisant la commande "composer create-project symfony/website-skeleton".

- Création de votre base de donnée : Modification du .env (DATABASE_URL=mysql://root:root@127.0.1:3306/"Nom de la db") et lancer la commande php bin/console doctrine:database:create

- Création de l'entiter Task : Créez l'entité Task en utilisant les commandes Doctrine pour générer les fichiers nécessaires et les classes associées.

- Créer les contrôleurs : Créez les contrôleurs pour les opérations CRUD des tâches. Définissez les méthodes pour les opérations de création, lecture, mise à jour et suppression des tâches.

- Créer les vues qui vous permete de visualité votre systéme CRUD : Créez les vues en utilisant Twig pour afficher les tâches et les formulaires associés.

Pour le lancement de votre serveur en local : 
- php -S localhost:8000 -t public/
- Localhost:8000

