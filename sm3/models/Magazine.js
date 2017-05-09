var keystone = require('keystone');
var Types = keystone.Field.Types;

/**
 * Magazine Model
 * ==============
 */

var Magazine = new keystone.List('Magazine');

Magazine.add({
	name: { type: String, required: true },
	ga: { type: String }
});

Magazine.defaultColumns = 'name,ga';
Magazine.register();
