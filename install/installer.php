<?php
/**
* @author   Laurent Jouanneau
* @copyright 2015 Laurent Jouanneau
* @link     http://jelix.org
* @licence  MIT license
*/

require_once (__DIR__.'/../application.init.php');

jApp::setEnv('install');

// launch the low-level migration
$migrator = new \jInstallerMigration(new textInstallReporter('notice', 'Low-level migration'));
$migrator->migrate();

// we can now launch the installer/updater
$installer = new jInstaller(new textInstallReporter());
if (!$installer->installApplication()) {
    exit (1);
}
try {
    jAppManager::clearTemp();
}
catch(Exception $e) {
    echo "WARNING: temporary files cannot be deleted because of this error: ".$e->getMessage().".\nWARNING: Delete temp files by hand immediately!\n";
    exit (1);
}
jAppManager::open();
exit (0);
