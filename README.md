# Workshop
Création d'une todo list et d'un système de login/logout en PHP symfony !


      ---> Par définition une to-do list est une liste de tâches à réaliser <---

# Prérequis :

Installation de PHP : https://www.geeksforgeeks.org/how-to-install-php-on-linux

Installation de Symfony : https://symfony.com/download

Installation de MySQL : https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04 

Installation de Doctrine pour Symfony : composer require symfony/orm-pack)

Pour créer un projet en PHP symfony :
      
            composer create-project symfony/website-skeleton "project_name"

# Exercices :

Exercice 1 :

      Vous devez configurer une base de donnée MySQL
      
      -->  Modification du .env (DATABASE_URL=mysql://root:"mot de passe"@127.0.1:3306/"Nom de la db")
      -->  Lancer la commande "php bin/console doctrine:database:create"

Exercice 2 :

      - Création d'une entité Task : Pour intéragir avec la database pour la to-do list
            -> un nom
            -> une description
            
      - Création d'une entité User : Pour intéragir avec la database pour le login/logout
            -> un username
            -> un password
            
       Aprés chaque ajout d'entités, vous devez update la base de donnée.
       Pour cela taper la commande : php bin/console make:migration , php bin/console doctrine:migrations:migrate

Exercice 3 :

      - Création d'un document controleur pour la gestions de ses routes
      
      Vous devez implémenter dans ce document 3 fichiers :
            - un fichier pour lister toutes les taches en cours
            - un fichier pour login/logout un user
            - un fichier pour ajouter, éditer, supprimer une tâche
      
Exercice 4 :

      - Création de vues pour vous permettre de visualiser votre systéme CRUD : 
            --> Créer des vues en utilisant Twig pour afficher les tâches et les formulaires associés.
            
Bonus :

      Faites nous un design qui déchire !
      
      N'hésiter pas à regarder la documentation Bootstrap !
            --> https://getbootstrap.com/


#Lancement du projet 
Pour lancer le projet sur votre serveur en local : 
      - php -S localhost:8000 -t public/
      - Localhost:8000

Voici un exemple :

![Screenshot](CRUD.png)

**A vos clavier!**
