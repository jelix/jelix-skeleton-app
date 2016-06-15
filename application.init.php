<?php
/**
* @author   Laurent Jouanneau
* @copyright 2015 Laurent Jouanneau
* @link     http://jelix.org
* @licence  MIT license
*/
require (__DIR__.'/vendor/autoload.php');

jApp::initPaths(
    __DIR__.'/',
    __DIR__.'/www/',
    __DIR__.'/var/',
    __DIR__.'/var/log/',
    __DIR__.'/var/config/',
    __DIR__.'/scripts/'
);
jApp::setTempBasePath(__DIR__.'/temp/');

/* if you don't use composer, uncomment these lines
jApp::declareModulesDir(__DIR__.'/modules');
jApp::declarePluginsDir(__DIR__.'/plugins');
*/