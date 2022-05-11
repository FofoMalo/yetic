---
Project : Yetic
owner: Florent Malo
describre: Intégration test
year: 2022
---
## 1.<a name="Table of content" ></a> Tables of content
* 1. [Table of content](#1a-name"table-of-content"-a-tables-of-content)
* 2. [set-up](#set-up)
* 3. [config](#configurer-son-projet)
* 4. [creer la bdd](#créer-la-base-de-données)
* 5. [test unitaires](#test-unitaire)
* 6. [install faker](#installer-fakerfactory)
* 7. [installer en local](#install-in-local)





## Set-up
Envrionnement de travail :
Config utile en local , à minima il vous faut disposer de : 
- PHP 8
- Un serveur Apache2 installé sous Lamp 
- Composer
- Symfony-Cli
- Docker et Docker-compose

Et pour un versionning disposer d'un compte github.

## Configurer son projet 
Une fois que nous avons aménager notre environnement de travail, nous allons installer un certains nombre d'outils utiles pour nos besoins futurs.
taper la commande suivante pour s'assurer que notre envrionnement est prêt à recevoir notre projet et l'initialiser
```bash ou pwsh
symfony check:requirements
symfony new yetic
```
## Créer la base de données 
Maintenant que notre projet a été bien installé nous allons créer notre base de donnée et configurer son environnement.
```
symfony console make:docker:database
```
## Test unitaire 
Pour lancer nos test unitaires saisir la commande suivante : 
```
php bin/phpunit --testdox
```
## Installer faker/factory
Tout d'abord nous allons invoquer depuis composer le bundles des fixtures : 
```
composer require  orm-fixtures --dev
composer require fakerphp/faker --dev
```
## Install in local 
Pour installer le projet en local il vous faut : 
* 1 - Le Cloner sur sa machine locale
```
git clone https://github.com/FofoMalo/yetic
```
* 2 - Pour la Bdd disposer de Docker et de docker-compose
* 3 - Lancer le server symfony : 
```
docker-compose -up d
symfony serve -d
```


