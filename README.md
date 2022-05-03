---
Project : Yetic
owner: Florent Malo
describre: Intégration test
year: 2022
---
## 1.<a name="Table of content" ></a> Tables of content
* 1. [Table of content](#1a-name"table-of-content"-a-tables-of-content)
* 2. [set-up](#set-up)



## Set-up
Envrionnement de travail :
Configuer le set en local , à minima il vous faut disposer de : 
- PHP 8
- Un serveur Apache2 installé sous Lamp 
- Composer
- Symfony-Cli
- Docker et Docker-compose

Et pour un versionning disposer d'un compte github.

## Configuer son projet 
Une fois que nous avons aménager notre environnement de travail, nous allons installer un certains nombre d'outils utiles pour nos besoins futurs.
taper la commande suivante pour s'assurer que notre envrionnement est prêt à recevoir notre projet et l'initialiser
```bash ou pwsh
symfony check:requirements
symfony new yetic
```
## 