$(function(){
	/*
	$('span').css('background','red');
	
	$('span').css({
		display: 'block',
		margin: '0 0 5px 0'	
	});
	*/
	
	var estilo = {
		border:			'3px solid #ccc',
		display:		'block',
		padding:		'5px',
		color:			'#fff',
		margin:			'0 0 5px 0',
		'text-align':	'center'	
	}
	
	$('span').css(estilo);
	
	/*
	$('span').click(function(){
		var bg = $(this).css('background-color');
		
		if($(this).hasClass('ativo')){
			$(this).removeClass('ativo');
			$('.j_result').css('background','#ccc').text('Debug Aqui!');
		}else{
			$('span').removeClass('ativo');
			$(this).addClass('ativo');
			$('.j_result').text(bg).css('background',bg);	
		}
	});
	*/	
	
	$(':button').click(function(){
		var span = $('span:first');
		var ex = $('.j_result');
		
		var spanwidth = span.width();
		var spaninnerw = span.innerWidth();
		var spanouterw = span.outerWidth();
		var spanh = span.height();
		var spaninnerh = span.innerHeight();
		var spanouterh = span.outerHeight();
		var janelah = $(document).height();
		
		ex.html(
			"Width: "+spanwidth+"<br/>"+
			"Inner Width: "+spaninnerw+"<br/>"+
			"Outer Width: "+spanouterw+"<br/>"+
			"Height: "+spanh+"<br/>"+
			"Inner Height: "+spaninnerh+"<br/>"+
			"Outer Height: "+spanouterh+"<br />"+
			"Janela tem H: "+janelah
		);
	});
});