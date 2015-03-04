# jelix-skeleton-app

Application skeleton to start a new project with the Jelix framework.

Only for Jelix 1.7+. (not released yet).

## Installation

[Install Composer](https://getcomposer.org/doc/00-intro.md#system-requirements).
For example on Linux or MacOs:

```bash
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

Then create your project, let's say 'myapp', using the source code of jelix-skeleton-app:

```bash
composer create-project --repository-url=http://package.jelix.org jelix/jelix-skeleton-app myapp
```

Then you should install the application

```bash
cd myapp/
cp var/config/profiles.ini.php.dist var/config/profiles.ini.php
cp var/config/localconfig.ini.php.dist var/config/localconfig.ini.php
php install/installer.php
```

Create a link to the jelix-www of jelix:

```bash
cd myapp/
ln -s ../vendor/jelix/jelix/lib/jelix-www www/jelix
```

or copy the directory
```bash
cd myapp/
cp -a ../vendor/jelix/jelix/lib/jelix-www www/jelix
```

Then you can launch the Php web server

```
cd myapp/
php -S localhost:8080 -t www 
```

And see your first page in your browser at the URL: http://localhost:8080.

You are ready to develop your modules ;-)

## name & license changes

In some comments header and other files, there is the name of the application "jelix-skeleton-app".
You should probably change it.

And it is recommended to choose a license ;-)


## installation without Composer

Retrieve [the Jelix archive](http://jelix.org/articles/en/download/stable). You'll
find a createapp.php script in it which creates from scratch the skeleton app.
See [the documentation](http://docs.jelix.org/en/manual-1.7/create-application).