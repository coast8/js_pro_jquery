$(function(){
	var ex = $('.exemplo');
	
	//$('.j_hide').hide();
	$('.j_hide').click(function(){
		ex.hide("slow");
	});
	
	//$('.j_show').show("slow");
	$('.j_show').click(function(){
		ex.show("slow");	
	});
	
	//$('.j_toggle').toggle();
	$('.j_toggle').click(function(){
		ex.toggle("slow");
	});	
	
	
	$(':text').keyup(function(){
		var valor = $(this).val();	
		if(valor == 'hide'){
			ex.hide("slow");
		}else if(valor == 'show'){
			ex.show('slow');
		}else if(valor == 'toggle'){
			ex.toggle("slow");
		}else{
			ex.text(valor);
		}
	});
});