<?php
/**
* @author   Laurent Jouanneau
* @copyright 2015 Laurent Jouanneau
* @link     http://jelix.org
* @licence  MIT license
*/
require ('../application.init.php');
require (JELIX_LIB_CORE_PATH.'request/jClassicRequest.class.php');

checkAppOpened();

jApp::loadConfig('index/config.ini.php');

jApp::setCoord(new jCoordinator());
jApp::coord()->process(new jClassicRequest());


