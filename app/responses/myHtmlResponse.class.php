<?php
/**
* @package
* @author    
* @copyright 
* @license    See LICENSE file
*/
require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'main~main';

    function __construct() {
        parent::__construct();

        // declare here web links to your common CSS and JS files here
        // or common web assets groups
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        $this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
