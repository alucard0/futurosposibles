jQuery(function($){
	$("div#plataformas").hide();
	$("div#quiz").hide();
	$("div#imagenesCampana").hide();
	$("div#aceleradores").hide();
	$("div#ilustraciones").hide();

	$('div.opciones').click(function() {

		var selector="#"+$(this).attr('key');
		if($(selector).is(":visible")){
			$(selector).siblings().hide();

		}
		else
		{
			$(selector).siblings().hide();
			$(selector).show();
		}

	});
});