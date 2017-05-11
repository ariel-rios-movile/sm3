var keystone = require('keystone'),
    Types = keystone.Field.Types;

/**
 * Tab Model
 * =========
 */

var Tab = new keystone.List('Tab', {
    map: { name: 'token' }
});

Tab.add({
    magazine: { type: Types.Relationship, ref: 'Magazine' },
	type: { type: Types.Select, options: 'channel,static,external', default: 'channel' },
    token: { type: String, required: true },
    title: { type: String },
    url: { type: Types.Url }
    // freeOn: {
    //     carrier1: { type: Types.Boolean },
    //     carrier2: { type: Types.Boolean },
    // }
});

Tab.defaultColumns = 'token,magazine,type,title,url';
Tab.register();
