require(['jquery'],function($) {
	
	$(document).ready(function() {
		const engineKey = $('meta[name=swiftype-engine-key]').attr('content');
		const searchId = '#'+$('meta[name=swiftype-search-input-id]').attr('content');

		$(searchId).swiftype({
			engineKey: engineKey
		});
	});
});

