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
composer create-project jelix/jelix-skeleton-app myapp dev-jelix-1.7
```

And go into the newly created folder for next commands

```bash
cd myapp/
```

The next thing to do is to "install" the application:

```bash
# copy the file where 
cp var/config/profiles.ini.php.dist var/config/profiles.ini.php

# an empty file to indicate local configuration values
cp var/config/localconfig.ini.php.dist var/config/localconfig.ini.php

# run the Jelix installer
php install/installer.php
```

Create a link to the jelix-www of jelix. Jelix-www contains web resources for some
Jelix components:

```bash
ln -s ../vendor/jelix/jelix/lib/jelix-www www/jelix
```

or copy the directory
```bash
cp -a ../vendor/jelix/jelix/lib/jelix-www www/jelix
```

Then you can launch the Php web server

```
php -S localhost:8080 -t www 
```

And see your first page in your browser at the URL: http://localhost:8080.

You are ready to develop your application and modules ;-)

Note: use the PHP web server only for development. Use production ready web server like
Apache or Nginx to run the application for production.

## name & informations

In some comments header and other files, there is the name of the application "jelix-skeleton-app".
You should probably change it. You should also probably want to change informations
into the .jelix-scripts.ini file and in the composer.json file.

## licence and copyright

The source code files are not released under a licence. So you have to choose a licence
and you should update the LICENSE file, the composer file and all comments header of other files. You shou

## installation without Composer

Retrieve [the Jelix archive](http://jelix.org/articles/en/download/stable). You'll
find a createapp.php script in it which creates from scratch the skeleton app.
See [the documentation](http://docs.jelix.org/en/manual-1.7/create-application).