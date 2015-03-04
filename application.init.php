<?php
/**
* @package   jelix-skeleton-app
* @author    
* @copyright 
* @license    See LICENSE file
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
