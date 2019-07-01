$(function(){
	var dispara 	= $(':button[value="Disparar"]');
	var verifica 	= $(':button[value="Verificar"]');
	var exemplo 	= $('span');
	
	dispara.click(function(){
		exemplo.slideUp("slow");	
	})
	.dblclick(function(){
		exemplo.slideDown("slow");	
	});
	
	dispara.click(function(){
		exemplo.slideToggle(1500);	
	});
	
	verifica.click(function(){
		if(exemplo.is(':visible')){
			$('body').append('<p style="color:green">Visível!</p>');
		}else if(exemplo.is(':hidden')){
			$('body').append('<p style="color:red">Oculto!</p>');
		}
		$('p').delay(2500).slideUp("slow");
	});
});