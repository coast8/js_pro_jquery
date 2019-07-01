<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seletores Hierárquicos!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$('h2').css('margin','0');
		$('p').css({margin:'0',color:'blue'});
		$('.exemplo').css({'margin-bottom':'20px',background:'#ccc'});
		
		//FILHAS
		$('.exemplo span').hide().delay('1000').fadeIn(1000).css('color','red');
		$('.exemplo h2').hide().css('font-size','50px').fadeIn(800);
		
		//FILHA DIRETA DO ELEMENTO
		$('.exemplo > span').css('color','green');
		
		//PRIMEIRO ELEMENTO APÓS O SELECIONADO
		$('.irmao_1 + p').css('font-size','25px');
		
		//TODOS DEPOIS DO SELECIONADO
		$('.irmao_1 ~ p').css('color','black');
	});
</script>
</head>

<body>

<div class="exemplo">
	<h2>H2 dentro de exemplo!</h2>
    <p>P dentro de exemplo com <span>SPAN dentro de P</span></p>
    <span>Span dentro de exemplo</span>
</div>

<h2>H2 Fora de exemplo!</h2>
<p class="irmao_1">P1 fora de exemplo</p>
<p class="imrao_2">P2 fora de exemplo</p>
<p class="irmao_3">P3 fora de exemplo</p>

</body>
</html>