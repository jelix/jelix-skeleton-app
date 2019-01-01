<?php
/**
* @author   Laurent Jouanneau
* @copyright 2015-2019 Laurent Jouanneau
* @link     http://jelix.org
* @licence  MIT license
*/
use Jelix\DevHelper\JelixCommands;

require (__DIR__.'/application.init.php');

// Commands for the developer

$application = JelixCommands::setup();

// here you can add commands to $application


JelixCommands::launch($application);
