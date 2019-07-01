$(function(){
	var este = $('.exemplo');
	
	$('#start').click(function(){
		/*
		este.animate({bottom: '300px'},2000,function(){
			$(this).css("background","red");
		});		
		*/	
			
		este.animate({bottom: '300px'},2000);
		
		este.queue(function(){
			$(this).css("background","red").dequeue();			
		});
		
		este.animate({top: '35px'},1000);
		este.css("background","green");
		
		este.queue(function(){
			$(this).css("background","#09F").dequeue();
		});
		
		//este.fadeOut(1000);
		
		este.queue(function(){
			//location.reload();	
			//$(location).attr("href",'http://www.upinside.com.br');
		});
	});
	
	$("#stop").click(function(){
		//este.clearQueue();
		//este.stop();
		//este.finish();
	});
	
	//$.fx.interval = 13;
	//$.fx.off = false;
})