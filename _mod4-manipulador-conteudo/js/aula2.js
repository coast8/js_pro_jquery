$(function(){
	var input = $(':button');
	var ex = $('span');
	

	input.click(function(){
		$('.j_um').fadeOut("slow");	
	}).dblclick(function(){
		$('.j_um').fadeIn("slow");	
	});

	

	input.click(function(){
		ex.fadeTo("slow",0.3);
	});

	

	input.click(function(){
		ex.fadeToggle(1000);	
	});

	
	input.click(function(){
		$('.j_um').fadeTo("slow",0.3,function(){
			$('.j_dois').fadeTo("slow",0.1);
		});	
		
	});
});