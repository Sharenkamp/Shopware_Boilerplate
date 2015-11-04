<?php
/**
 * ExampleBackend
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
