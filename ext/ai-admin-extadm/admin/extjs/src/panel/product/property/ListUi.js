/*!
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2014
 */

Ext.ns('MShop.panel.product.property');

MShop.panel.product.property.ListUi = Ext.extend(MShop.panel.AbstractListUi, {

    recordName : 'Product_Property',
    idProperty : 'product.property.id',
    siteidProperty : 'product.property.siteid',
    itemUiXType : 'MShop.panel.product.property.itemui',

    autoExpandColumn : 'product-property-value',

    filterConfig : {
        filters : [{
            dataIndex : 'product.property.type.label',
            operator : '=~',
            value : ''
        }]
    },

    sortInfo : {
        field : 'product.property.type.label',
        direction : 'ASC'
    },


    initComponent : function() {
        this.title = MShop.I18n.dt('admin', 'Property');

        MShop.panel.AbstractListUi.prototype.initActions.call(this);
        MShop.panel.AbstractListUi.prototype.initToolbar.call(this);

        MShop.panel.product.property.ListUi.superclass.initComponent.call(this);
    },

    afterRender : function() {
        this.itemUi = this.findParentBy(function(c) {
            return c.isXType(MShop.panel.AbstractItemUi, false);
        });

        MShop.panel.product.property.ListUi.superclass.afterRender.apply(this, arguments);
    },

    onBeforeLoad : function(store, options) {
        this.setSiteParam(store);

        if(this.domain) {
            this.setDomainFilter(store, options);
        }

        options.params = options.params || {};
        options.params.condition = {
            '&&' : [{
                '==' : {
                    'product.property.parentid' : this.itemUi.record ? this.itemUi.record.id : null
                }
            }]
        };

    },

    getColumns : function() {
        return [
            {
                xtype : 'gridcolumn',
                dataIndex : 'product.property.id',
                header : MShop.I18n.dt('admin', 'ID'),
                sortable : true,
                width : 50,
                hidden : true
            },
            {
                xtype : 'gridcolumn',
                dataIndex : 'product.property.parentid',
                header : MShop.I18n.dt('admin', 'Product ID'),
                width : 50,
                hidden : true
            },
            {
                xtype : 'gridcolumn',
                dataIndex : 'product.property.typename',
                header : MShop.I18n.dt('admin', 'Type'),
                align : 'center'
            },
            {
                xtype : 'gridcolumn',
                dataIndex : 'product.property.languageid',
                header : MShop.I18n.dt('admin', 'Language'),
                align : 'center',
                sortable : true,
                width : 50,
                renderer : MShop.elements.language.renderer
            },
            {
                xtype : 'gridcolumn',
                dataIndex : 'product.property.value',
                header : MShop.I18n.dt('admin', 'Value'),
                id : 'product-property-value',
                sortable : true
            },
            {
                xtype : 'datecolumn',
                dataIndex : 'product.property.ctime',
                header : MShop.I18n.dt('admin', 'Created'),
                format : 'Y-m-d H:i:s',
                sortable : true,
                width : 130,
                editable : false,
                hidden : true
            },
            {
                xtype : 'datecolumn',
                dataIndex : 'product.property.mtime',
                header : MShop.I18n.dt('admin', 'Last modified'),
                format : 'Y-m-d H:i:s',
                sortable : true,
                width : 130,
                editable : false,
                hidden : true
            },
            {
                xtype : 'gridcolumn',
                dataIndex : 'product.property.editor',
                header : MShop.I18n.dt('admin', 'Editor'),
                sortable : true,
                width : 130,
                editable : false,
                hidden : true
            }];
    }
});

Ext.reg('MShop.panel.product.property.listui', MShop.panel.product.property.ListUi);

//hook this into the product item tab panel
Ext.ux.ItemRegistry.registerItem('MShop.panel.product.ItemUi', 'MShop.panel.product.property.listui', MShop.panel.product.property.ListUi, 5);
