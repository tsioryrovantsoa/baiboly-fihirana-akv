## Deploiement

- Cloner le projet https://github.com/tsioryrovantsoa/baiboly-fihirana-akv.git
- composer install --optimize-autoloader --no-dev
- copy .env.example .env
    APP_ENV=production
    APP_DEBUG=false
    APP_URL=http://localhost/baiboly-fihirana-akv
    DB_DATABASE=baiboly-fihirana-akv
    DB_USERNAME=root
    DB_PASSWORD=root
    QUEUE_CONNECTION=database
- php artisan key:generate
- php artisan migrate --seed
- php artisan storage:link
- php artisan config:cache
- php artisan event:cache
- php artisan route:cache
- php artisan view:cache
- F:\Programmes\xampp\apache\conf\extra\httpd-vhosts.conf

<VirtualHost *:80>
    ServerName baiboly-fihirana.localhost
    DocumentRoot "F:/Programmes/xampp/htdocs/baiboly-fihirana-akv/public"

    <Directory "F:/Programmes/xampp/htdocs/baiboly-fihirana-akv/public">
	Require all granted
	AllowOverride All
    </Directory>
</VirtualHost>

- Redemarrer xampp
- http://baiboly-fihirana.localhost/

- Demarrer xampp en mode administrateur
- Installer en service Apache et MySQL
- Redemarrer l'ordinateur et normalement ca doit etre demarrer automatiquement

-planification 
    queue work
    schedule:run

-redemarrer le commande

- fichier .bat
@echo off
REM Suppression des fichiers .pptx et .ppsx dans le dossier de téléchargement Mozilla
del /F /Q %USERPROFILE%\Downloads\Mozilla\*.pptx
del /F /Q %USERPROFILE%\Downloads\Mozilla\*.ppsx

del /F /Q F:\Telechargements\Mozilla\*.pptx
del /F /Q F:\Telechargements\Mozilla\*.ppsx

REM Exécution de la commande pour mettre à jour le contenu
php artisan contenu:update

REM Démarrage du serveur Laravel
php artisan serve

