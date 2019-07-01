$(function(){
	var exemplo = $('.exemplo');
	
	$(':button:eq(0)').click(function(){
		exemplo.addClass('adicionar');	
	});
	
	$(':button:eq(1)').click(function(){
		exemplo.removeClass('adicionar');	
	});
	
	$(':button:eq(2)').click(function(){
		exemplo.toggleClass('adicionar');	
	});
	
	$(':button').click(function(){
		if(exemplo.hasClass('adicionar')){
			exemplo.text('Adicionar existe');
		}else{
			exemplo.text('Classes que existem são: '+ exemplo.attr('class'));
		}
	});
	
	$(':button:last').click(function(){
		exemplo.clone().prependTo('body');	
	});
	
	exemplo.click(function(){
		if($(this).hasClass('adicionar')){
			$(this).text('Adicionar existe');
		}else{
			$(this).text('Classes que existem são: '+ $(this).attr('class'));
		}
	});
	
	$('body').on('click','div',function(){
		if($(this).hasClass('adicionar')){
			$(this).text('Adicionar existe');
		}else{
			$(this).text('Classes que existem são: '+ $(this).attr('class'));
		}	
	});
	
	
});