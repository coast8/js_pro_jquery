$(function(){	
	//PLACEHOLDER COM FOCUSIN E FOCUSOUT
	$('.j_place').each(function(){
		var place = $(this).attr('title');
		var input = $(this);
		
		input
			.val(place)
			.css('color','#ccc')
			.focusin(function(){
				input.css('color','#000');
				if(input.val() == place){
					input.val('');	
				}
			}).focusout(function(){
				if(input.val() == ''){
					input.css('color','#ccc');
					input.val(place);	
				}
			});	
	});
	
	var ex = $('.exemplo');
	
	/*
	$('.j_texto').keypress(function(){
		ex.text($(this).val());
	});
	*/
	
	/*
	$('.j_texto').keydown(function(){
		ex.text($(this).val());
	});
	*/
	
	/*
	$('.j_texto').keyup(function(){
		ex.text($(this).val());
	});
	*/
	
	/*
	$('.j_um').focus(function(){
		ex.text($(this).attr('title'));
	}).keyup(function(){
		if($(this).val() == 'upinside'){
			$('.j_dois').focus();	
		}
	});
	
	$('.j_um').blur(function(){
		ex.text('Você saiu do campo '+$(this).attr('name'));
	});
	*/
	
	$('.j_um').change(function(){
		ex.text('Você alterou o valor do campo: '+$(this).val());	
	});
	
	$(':button').click(function(){
		$('form').submit();
		$('.j_texto').select();
	});
	
	$("form").submit(function(){
		return false;	
	});
});