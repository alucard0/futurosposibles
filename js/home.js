jQuery(function($){

	//var Anim = new TimelineMax({paused:true});

	//Anim.to(".row > .col", 0.2, {scale:0, autoAlpha:0}, 0.1, "stagger");

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
			$("div.row div.opciones.campana").removeClass("active2");
			
			if($(this).hasClass("campana")){
				$(this).addClass("active2");
				
			}
			else
			{
				$(this).addClass("active");
			}
		}

	});

//$('.campana').click(function(){ Anim.restart(); }) ;



});

