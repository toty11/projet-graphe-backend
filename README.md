# Backend projet graphe

Groupe-II.1
LECANU Nicolas
JOSEPH-PARFAITE Thomas

# Installation

Placez le dossier dans le répertoire www de votre web server.
Créez un virtual host
<VirtualHost *:80>
	ServerName graphe-api
	DocumentRoot "c:/wamp64/www/projet-graphe-backend/public"
	<Directory  "c:/wamp64/www/projet-graphe-backend/public/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>

Importer dans phpmyadmin le fichier "script-sql.sql" situé à la racine du dossier 

# Routes

Matière : mathématiques, svt, français
{nom de votre virtual host}/{matière} - Les notes de tous les élèves
{nom de votre virtual host}/{matière}/{id étudiant} - Les notes que l'étudiant associé à l'id à obtenu
