<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicializando o jQuery!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		alert('o DOM carregou!');
	});
	
	$(function(){
		///
	});
	
	$(window).load(function(){
		alert('elementos carregados');	
	});
</script>
</head>

<body>

<img src="http://www.thoosje.com/vista-wallpapers/windowsvista/vista_wallpapers%285%29.jpg" />

</body>
</html>