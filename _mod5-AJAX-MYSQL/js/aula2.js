$(function(){
	var exemplo = $('.exemplo');
	
	$(':button[value="Prepend"]').click(function(){
		exemplo.prepend("<p>Antes usando prepend</p>");	
	});
	
	$(':button[value="Append"]').click(function(){
		exemplo.append("<p>Depois usando append</p>");	
	});
	
	$(':button[value="PrependTo"]').click(function(){
		$('#curso').prependTo(exemplo);
	});
	
	$(':button[value="AppendTo"]').click(function(){
		$('#site').appendTo(exemplo);
	});
	
	$(':text').keyup(function(){
		exemplo.text($(this).val());	
	});
	
	$("textarea").keyup(function(){
		exemplo.html($(this).val());	
	});	
	
	exemplo.click(function(){
		$(this).before("<p>Antes com before</p>");	
		$(this).after("<p>Depois com after</p>");
		
		$("<p>Antes com insertBefore</p>").insertBefore($(this));
		$("<p>Antes com insertAfter</p>").insertAfter($(this));
	});
});