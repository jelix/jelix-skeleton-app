<?php
/**
* @author
* @copyright 
* @link      
* @license    MIT license. See LICENSE file
*/


class mainModuleInstaller extends \Jelix\Installer\Module\Installer {

    function install(\Jelix\Installer\Module\API\InstallHelpers $helpers) {

        //$helpers->database()->execSQLScript('sql/install');

        /*
        jAcl2DbManager::addSubject('my.subject', 'main~acl.my.subject', 'subject.group.id');
        jAcl2DbManager::addRight('admins', 'my.subject'); // for admin group
        */
    }
}