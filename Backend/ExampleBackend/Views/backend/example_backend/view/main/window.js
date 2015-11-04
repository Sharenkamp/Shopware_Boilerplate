/**
 * window
 */

//{namespace name=backend/order/main}
Ext.require([
    'Ext.grid.*', 'Ext.data.*', 'Ext.panel.*'
]);
Ext.define('Shopware.apps.ExampleBackend.view.main.Window', {
    extend:    'Enlight.app.Window',
    alias:     'widget.example_backend-main-window',
    border:    false,
    autoShow:  true,
    resizable: true,
    layout:    {
        type: 'fit'
    },
    height:    800,
    width:     800,

    initComponent:   function ()
    {
        console.log('initComponent()');
        var me = this;
        me.items = [me.getIframe()]
        me.callParent(arguments);
    },

    getIframe: function(){
        console.log('getIframe()');
        return {
            xtype : "component",
            autoEl : {
                tag : "iframe",
                src : "http://www.google.de"
            }
        };
    }



});