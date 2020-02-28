# Portfolio AJDAINI ILYASS
Voici mon portfolio complet créé avec le framework Symfony 5.0.4, avec une page index, contact et login/registration

## Prérequis  
* Avoir installé [Composer](https://getcomposer.org/download) (Composer est un logiciel gestionnaire de dépendances libre écrit en PHP)
* Une version php supérieur à [7.2.5](https://www.php.net/releases/7_2_5.php)

## Installer les dépendances 
Grâce au fichier ```composer.json``` il va vous donner toutes les dépendances nécessaires pour faire fonctionner le site, placez-vous d'abord dans la racine du répertoire, puis lancez la commande suivante :

* ```composer install``` (il devra normalement installer un dossier ```vendor```)

## Lancer le serveur
Pour faire tourner rapidement le serveur (pendant la phase de développement) sans l'aide d'un serveur web, il faudra lancer alors la commande suivante :
* ```php bin/console server:run``` (il devra tourner sur le port 8000, ```localhost:8000```)

## Crée les tables dans la base de données
Grâce aux entités qui sont sous forme des classes, ils donnent l'architecture entière de la table, donc avant de lancer les commandes pour créer les tables, il faudra configurer d'abord le fichier ```.env``` pour accéder à la base de données.
```DATABASE_URL=mysql://mon_username:mon_mdp@127.0.0.1:3306/portfolio?serverVersion=5.7```, vous pouvez modifier le port si vous utilisez un autre driver (j'utilise MySql qui est le port 3306). Après avoir configuré votre base de données vous pouvez maintenant lancer les commandes suivantes qui vont créent automatiquement les tables grâce à l'ORM ```Doctrine``` de Symfony

* ```php bin/console make:migration```
* ```php bin/console doctrine:migrations:migrate```
