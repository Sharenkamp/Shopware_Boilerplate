/**
 * app
 *
 * @category   Shopware
 * @package    Shopware_Plugins
 * @copyright  Copyright (c) 2013 PayIntelligent GmbH (http://payintelligent.de)
 */
Ext.define('Shopware.apps.ExampleBackend', {
    extend:      'Enlight.app.SubApplication',
    name:        'Shopware.apps.ExampleBackend',
    bulkLoad:    true,
    controllers: ['Main'],
    views:       ['main.Window'],
    launch: function ()
    {
        console.log('launch()');
        var me = this;
        me.windowTitle = 'Window title';
        var mainController = me.getController('Main');
        return mainController.mainWindow;
    }
});