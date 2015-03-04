<?php
/**
* @package   jelix-skeleton-app
* @author    
* @copyright 
* @link      
* @license    See LICENSE file
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('html');

        // this is a call for the 'welcome' zone after creating a new application
        // remove this line !
        $rep->body->assignZone('MAIN', 'jelix~check_install');

        return $rep;
    }
}
