# Backend projet graphe

Groupe-II.1
- LECANU Nicolas
- JOSEPH-PARFAITE Thomas

# Installation

1. Placez le dossier dans le répertoire www de votre web server.
2. Créez un virtual host
```
<VirtualHost *:80>
	ServerName graphe-api
	DocumentRoot "c:/wamp64/www/projet-graphe-backend/public"
	<Directory  "c:/wamp64/www/projet-graphe-backend/public/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```
3. Importer dans phpmyadmin le fichier ```script-sql.sql``` situé à la racine du dossier, qui va créer la base dbgraphe ainsi que les tables etudiant et notes.

# Routes

Le jeu de données contient trois matière : mathématiques, svt, français, quatre étudiant (id de 1 à 4).

Les différentes routes de l'api :

{nom de votre virtual host}/{matière} - Les notes de tous les élèves

{nom de votre virtual host}/{matière}/{id étudiant} - Les notes que l'étudiant associé à l'id à obtenu

Exemple: 

graphe-api/mathématiques

graphe-api/mathématiques/1
