jQuery(function($){
	$("div#campana").hide();
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
			$("div.row div.opciones").siblings().removeClass("active");
			$("div.row div.opciones.campana").removeClass("active");
			$(this).addClass("active");
		}

	});
});