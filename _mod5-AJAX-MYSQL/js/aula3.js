$(function(){
	var este = $('strong');
	
	este.click(function(){
		$(this).toggleClass('off');	
	});
	
	$(':button:eq(0)').click(function(){
		este.prependTo(".exemplo");	
	});
	
	$(':button:eq(1)').click(function(){
		este.detach();
	});
	
	$(':button:eq(2)').click(function(){
		este.remove();	
	});
	
	$(':button:eq(3)').click(function(){
		este.empty();	
	});
});