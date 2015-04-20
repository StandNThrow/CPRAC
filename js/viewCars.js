$(document).ready(function()
{				
	$('#viewCars').live('pagecreate',function(event){
		$.get('data.xml', function(data) {
			$(data).find('car').each(function() {
				var category	= $(this).find('type').text();
				var model		= $(this).find('model').text();
				var img			= $(this).find('img').text();
				var description	= $(this).find('description').text();
				
				$("#injectElements").append('<li data-theme="c" class="ui-btn ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-up-c"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a class="ui-link-inherit"><img src="' + img + '" class="ui-li-thumb"><p class="ui-li-desc">' + '<i>Model: </i>' + model + '</p><p class="ui-li-desc">' + '<i>Type: </i>' + category + '</p><p class="ui-li-desc">' + '<i>Description: <i>' + description + '</p></a></div><span class="ui-icon ui-icon-shadow"></span></div></li>');
			});
		});
	});
});