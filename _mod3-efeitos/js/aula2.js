$(function(){
	var ex = $('.exemplo');
	
	//UM CLICK
	$('.j_um').click(function(){
		$(this).css("background","#ccc");
		ex.text("Você clicou!");
	});
	
	//DOIS CLICKS
	$('.j_dois').dblclick(function(){
		$(this).css("background","#ccc");
		ex.text("Você deu dois click's!");
	});
	
	//DAR E REMOVER O FÓCU
	$('.j_tres').focusin(function(){
		$(this).css("background","red");
		ex.text("Você deu focu!");
	}).focusout(function(){
		$(this).css("background","#ccc");
		ex.text("Você tirou o focu!");
	});
	
	//PASSAR O MOUSE
	$('.j_quatro').hover(function(){
		$(this).css("background","#ccc");
		ex.text("Você passou o mouse!");
	});
	
	//PRESSIONAR E SOLTAR O BOTÃO DO MOUSE
	$('.j_cinco').mousedown(function(){
		$(this).css("background","red");
		ex.text("Você apertou o botão do mouse!");
	}).mouseup(function(){
		$(this).css("background","#ccc");
		ex.text("Você soltou o botão do mouse!");
	});
	
	//ENTRAR E SAIR DO ELEMENTO
	var a = 0;
	$('.j_seis').mouseenter(function(){
		a += 1;
		ex.text("Mouse ENTER: "+a);
	}).mouseout(function(){
		ex.text("Mouse OUT");
	});
	
	//ACESSAR E ABANDONAR O ELEMENTO
	var b = 0;
	$('.j_sete').mouseover(function(){
		b += 1;
		ex.text("Mouse OVER: "+b);	
	}).mouseleave(function(){
		ex.text("Mouse LEAVE");
	});
	
	//MOVER O MOUSE
	$('.j_oito').mousemove(function(move){
		var localx = move.pageX;
		var localy = move.pageY;
		ex.text("Movende X: "+localx+" - Movendo Y: "+localy);
	});
		
});