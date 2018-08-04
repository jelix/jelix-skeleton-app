<?php
/**
* @package   jelix-skeleton-app
* @subpackage main
* @author    your name
* @copyright 
* @link      
* @license    MIT license. See LICENSE file
*/


class mainModuleInstaller extends jInstallerModule2 {

    function installEntrypoint(jInstallerEntryPoint2 $entryPoint) {

        //if ($this->firstDbExec())
        //    $this->entryPoint->execSQLScript('sql/install');

        /*if ($this->firstExec('acl2')) {
            jAcl2DbManager::addSubject('my.subject', 'main~acl.my.subject', 'subject.group.id');
            jAcl2DbManager::addRight('admins', 'my.subject'); // for admin group
        }
        */
    }
}