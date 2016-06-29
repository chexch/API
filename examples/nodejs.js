var request = require('request'),
	api_key = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'; // Your API key on https://chexch.com/api

// All available for e-currency exchange	

request.post({
	url: 'https://chexch.com/api', // The URL for API requests
	form: {
		type: 'currencies', // API method
		key: api_key,       // Your API key
		format: 'json',     // Format receive data (xml or json). If not specified, the default json
		lang: 'en'          // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
	}
}, function(err, body, headers){
	
	console.log('currencies', body);
});


// List of currencies that you can obtain when you exchange any currency	

request.post({
	url: 'https://chexch.com/api', // The URL for API requests
	form: {
		type: 'available_currencies', // API method
		from: 'PRUSD',      // The currency you give
		key: api_key,       // Your API key
		format: 'xml',     	// Format receive data (xml or json). If not specified, the default json
		lang: 'en'          // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
	}
}, function(err, body, headers){
	
	console.log('available_currencies from', body);
});


// List of currencies that can be given to obtain any currency	

request.post({
	url: 'https://chexch.com/api', // The URL for API requests
	form: {
		type: 'available_currencies', // API method
		to: 'OKRUB',      	// The currency you will receive
		key: api_key,       // Your API key
		format: 'json',     // Format receive data (xml or json). If not specified, the default json
		lang: 'ru'          // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
	}
}, function(err, body, headers){
	
	console.log('available_currencies to', body);
});


// All exchange rates (e.g. PRUSD at OKRUB)

request.post({
	url: 'https://chexch.com/api', // The URL for API requests
	form: {
		type: 'rates', 		// API method
		from: 'PRUSD',      // The currency you give
		to: 'OKRUB',      	// The currency you will receive
		key: api_key,       // Your API key
		format: 'xml',     	// Format receive data (xml or json). If not specified, the default json
		lang: 'ru'          // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
	}
}, function(err, body, headers){
	
	console.log('rates', body);
});