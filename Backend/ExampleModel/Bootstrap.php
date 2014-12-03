<?php

/**
 * Bootstrap.php
 *
 * @category   PayIntelligent
 * @copyright  Copyright (c) 2013 PayIntelligent GmbH (http://payintelligent.de)
 */
class Shopware_Plugins_Backend_ExampleModel_Bootstrap extends Shopware_Components_Plugin_Bootstrap
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
            'label' => 'ExampleModel',
            'description' => ''
        );
    }

    public function install()
    {
        $this->registerCustomModels();
		$modelManager = Shopware()->Models();

		$schemaTool = new Doctrine\ORM\Tools\SchemaTool($modelManager);
		$schemaTool->createSchema(
			array(
				$modelManager->getClassMetadata('Shopware\CustomModels\ExampleModel\Helper')
			)
		);
		return true;
    }

    public function uninstall()
    {
        return true;
    }

	/**
     * Wenn das Plugin eigene Models bereit stellt und verwendet,
     * muss das Model-Verzeichnis in der afterInit-Methode der
     * Bootstrap registriert werden. Dafür gibt es die Helfer-Methode
     * registerCustomModels. Für diese muss ein Verzeichnis "Models"
     * im Plugin-Verzeichnis existieren
     *
     */
	public function afterInit()
    {
        $this->registerCustomModels();
    }
}