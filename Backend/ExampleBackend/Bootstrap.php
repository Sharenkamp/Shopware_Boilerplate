<?php

/**
 * Bootstrap.php
 *
 * @category   PayIntelligent
 * @copyright  Copyright (c) 2013 PayIntelligent GmbH (http://payintelligent.de)
 */
class Shopware_Plugins_Backend_ExampleBackend_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{

    /**
     * Gets the Plugin-Version
     *
     * @return string
     */
    public function getVersion()
    {
        return "1.0.0";
    }

    /**
     * Get Info for the Pluginmanager
     *
     * @return array
     */
    public function getInfo()
    {
        return array(
            'version' => $this->getVersion(),
            'autor' => 'PayIntelligent GmbH',
            'source' => $this->getSource(),
            'support' => 'http://www.payintelligent.de',
            'link' => 'http://www.payintelligent.de',
            'copyright' => 'Copyright (c) 2013, PayIntelligent GmbH',
            'label' => 'ExampleBackend',
            'description' => ''
        );
    }

    public function install()
    {
        $this->_subscribeEvents();
        $this->_createMenuEntry();
        return true;
    }

    public function uninstall()
    {
        return true;
    }

    private function _createMenuEntry(){
        $this->createMenuItem(
            array('label' => 'ExampleBackend',
                'class' => 'sprite-cards-stack',
                'active' => 1,
                'controller' => 'ExampleBackend',
                'action' => 'index',
                'parent' => null));
    }

        /**
     * Create events for the plugin
     *
     * @throws Exception Error: Cant create events(_subscribeEvents)
     */
    private function _subscribeEvents()
    {
        $this->subscribeEvent('Enlight_Controller_Dispatcher_ControllerPath_Backend_ExampleBackend', 'backendController');
    }

    /**
     * Eventlistener
     *
     * @return string
     */
    public function backendController()
    {
        Shopware()->Template()->addTemplateDir($this->Path() . 'Views/');
        return $this->Path() . 'Controller/backend/ExampleBackend.php';
    }
}