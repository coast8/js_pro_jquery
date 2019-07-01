<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Filtros de Conteúdo!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		//ELEMENTO QUE CONTEM O CONTEÚDO PESQUISADO!
		$('li:contains("Tecnologia")').css("background","#609");
		
		//ELEMENTO QUE CONTEM O ELEMNTO PESQUISADO INTERNO
		$('li:has("span")').css("background","#F00");
		
		//ELEMENTOS QUE NÃO CONTEM CONTEÚDO
		$('li:empty').css("background","#3F6");
		//$('li:not(li:empty)').css("border",'3px solid pink');
		$('li:parent').css("border",'3px solid pink');
	});
</script>
</head>

<body>

<ul>
	<li>UpInside Tecnologia</li>
    <li>Portal <span>de</span> Interatividade</li>
    <li></li>
    <li>Cursos e <span>Vídeo aulas</span> em TI</li>
    <li></li>
    <li>Tudo que você precisa em Tecnologia da web</li>
</ul>


</body>
</html>