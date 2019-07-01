$(function(){
	var contar = 0;

	//ON E OFF
	$('p').click(function(){
		contar ++;
		$('body').append('<p>Clique novamente: '+contar+'</p>');	
	});
	
	$('body').on('click','p',function(){
		contar ++;
		$('body').append('<p>Clique novamente: '+contar+'</p>');
		if(contar >= 3){
			$('body').off('click','p');	
		}
	});
	
	//ONE
	$('p').click(function(){
		alert('Clocou!');	
	});
	
	
	$('p').one('click',function(){
		alert('Clicou!');	
	});
	
	$('body').on({
		click: function(){
			$('body').append('<p>Clique novamente</p>');
			},
		mouseover: function(){
			$('body').append('<p>Mova o mouse</p>');
			}
	},'p');
});








