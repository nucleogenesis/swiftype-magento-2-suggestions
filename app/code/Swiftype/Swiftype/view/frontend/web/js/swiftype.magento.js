require(['jquery'],function($) {
	
	$(document).ready(function() {
		const engineKey = $('meta[name=swiftype-engine-key]').attr('content');

		console.log(engineKey);

		$('#search').swiftype({
			engineKey: engineKey
		});
	});
});

