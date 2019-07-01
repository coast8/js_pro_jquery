<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seletores de atributos!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		//CONTEM O ATRIBUTO
		$('a[rel]').css({display:'block','margin-bottom':'10px'});
		$('a[href]').css('color','#F30');
		
		//VALOR DO ATRIBUTO É IGUAL
		$('a[href="#"]').css('font-size','30px');
		
		//CONTEM VALOR DO ATRIBUTO
		$('a[href*="up"]').css('font-size','50px');
		
		//VALOR DO ATRIBUTO É DIFERENTE
		$('a[rel!="up1"]').css('color','#606');
		
		$('a[title*="UpInside"]').click(function(){
			alert('Estamos estudando os seletores de atributos!');
		});
	});
</script>
</head>

<body>

<a href="#" rel="up1">Link 1</a>
<a href="#" rel="up2">Link 2</a>
<a href="#up" rel="up3" title="UpInside">Link 3</a>

</body>
</html>