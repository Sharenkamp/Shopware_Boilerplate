/**
 * main
 */

Ext.define('Shopware.apps.ExampleBackend.controller.Main', {
    extend: 'Ext.app.Controller',
    mainWindow: null,

    init: function ()
    {
        console.log('init()');
        var me = this;
        me.mainWindow = me.getView('main.Window').create();
        me.callParent(arguments);
    }

});