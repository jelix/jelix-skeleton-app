<?php
/**
* @author   Laurent Jouanneau
* @copyright 2015-2018 Laurent Jouanneau
* @link     http://jelix.org
* @licence  MIT license
*/
require (__DIR__.'/vendor/autoload.php');

jApp::initPaths(
    __DIR__.'/'
    //__DIR__.'/www/',
    //__DIR__.'/var/',
    //__DIR__.'/var/log/',
    //__DIR__.'/var/config/'
);
jApp::setTempBasePath(__DIR__.'/temp/');

require (__DIR__.'/vendor/jelix_app_path.php');

/*
// if you don't use composer to indicate modules directories, uncomment these lines
jApp::declareModulesDir(array(
                        __DIR__.'/../lib/jelix-modules/',
                        __DIR__.'/../lib/jelix-admin-modules/',
                        __DIR__.'/modules/'
                    ));
jApp::declarePluginsDir(array(
                        __DIR__.'/../lib/jelix-plugins/',
                        __DIR__.'/plugins'
                    ));
*/