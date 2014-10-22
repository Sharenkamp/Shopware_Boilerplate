<?php
/**
 * ExampleBackend
 *
 * @category   PayIntelligent
 * @package    Expression package is undefined on line 6, column 18 in Templates/Scripting/PHPClass.php.
 * @copyright  Copyright (c) 2011 PayIntelligent GmbH (http://payintelligent.de)
 */
class Shopware_Controllers_Backend_ExampleBackend extends Shopware_Controllers_Backend_ExtJs
{
    /**
     * index action is called if no other action is triggered
     *
     * @return void
     */
    public function indexAction()
    {
        $this->View()->loadTemplate("backend/example_backend/app.js");
        $this->View()->assign("title", "Example Title");
    }
}
