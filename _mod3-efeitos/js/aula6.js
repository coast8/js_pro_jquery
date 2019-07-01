$(function(){
	var ex = $('.exemplo');
	
	$(':text').click(function(){
		var texto = $(this).val();
		ex.text(texto);
	});
	
	//$(':text').trigger('focusin');
	$('.j_disparar').click(function(){
		$(':text').trigger('click');
		$('form[name="campos_dinamicos"]').submit();
	});
	
	//$('.campos').append('Teste');
	$('.j_add').click(function(){
		$('.campos').append('<input type="text" name="texto[]" />');	
	});
	
	$('.j_anexo').click(function(){
		$('.campos').prepend('<input type="file" class="file" name="img[]" multiple="multiple" />');
		$(this).unbind('click').fadeOut("slow");
	});
	
	$('.j_clear').click(function(){
		$('pre').fadeOut();	
	});
	
})