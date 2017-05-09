var keystone = require('keystone');
var Types = keystone.Field.Types;

/**
 * Tab Model
 * =========
 */

var Tab = new keystone.List('Tab', {
    map: { name: 'token' }
});

Tab.add({
    magazine: { type: Types.Relationship, ref: 'Magazine' },
    token: { type: String, required: true },
	type: { type: Types.Select, options: 'channel,static', default: 'channel' }
});

Tab.defaultColumns = 'magazine,token,type';
Tab.register();
