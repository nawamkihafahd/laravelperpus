1. `php artisan key:generate'
2. `php artisan migrate --seed`


vhost config:
windows/system32/...../hosts :

127.0.0.1       perpustakaan.perpus


apache/conf/..../httpd-vhosts.conf/
<VirtualHost *:80>
ServerAdmin admin@perpustakaan.perpus
DocumentRoot "dir\htdocs\perpus\public"
ServerName perpustakaan.perpus
ServerAlias perpustakaan.perpus
ErrorLog logs/perpustakaan.perpus.log
CustomLog logs/perpustakaan.perpus.log combined
<Directory "dir\htdocs\perpus\public">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Order allow,deny
    Allow from all
    Require all granted
</Directory>
</VirtualHost>