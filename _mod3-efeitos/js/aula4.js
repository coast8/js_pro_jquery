$(function(){
	
	var contar = 0;
	var ex = $('.exemplo');
	
	function teste(){
		contar ++;
		ex.text($(this).val() + ' - ( '+contar+' )');
	}
	

	$('.j_input').focus(function(){
		contar ++;
		ex.text($(this).val() + ' - ( '+contar+' )');
	}).keyup(function(){
		contar ++;
		ex.text($(this).val() + ' - ( '+contar+' )');	
	}).mouseover(function(){
		contar ++;
		ex.text($(this).val() + ' - ( '+contar+' )');
	});
	
	
	$('.j_input').bind('focus keyup mouseover', function(){
		contar ++;
		ex.text($(this).val() + ' - ( '+contar+' )');
	});	
	
	$('.j_input').keyup(teste);
	$('.j_input').bind('focus keyup mouseover',teste);
	
	$('.j_input').bind('focus keyup mouseover',function(){
		
		$(this).after(contar+'<br>');
		
		if(contar >= 5){
			$(this).unbind();
			$(this).unbind('focus mouseover');
			$(this).unbind('focus mouseover', teste);
		}
	});
	
	
	$('.j_input').bind({
		keyup: teste,
		focus: function(){
				ex.text('Focus');
			},
		blur: function(){
				ex.text('Blur');
			}	
	});

	
	function escreve(){
		ex.text($(this).val());	
	}
	
	function dafocus(){
		ex.text('Focus');
	}
	
	function dablur(){
		ex.text('Blur');
	}
	
	$('.j_input').bind({
		keyup: escreve,
		focus: dafocus,
		blur: dablur,
		mouseover: teste
	});
});