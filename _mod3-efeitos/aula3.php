<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventos de teclado e formulário!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/aula3.js"></script>
<link rel="stylesheet" type="text/css" href="css/aula3.css" />

</head>

<body>

<div class="exemplo">Aguardando Ação!</div>

<form action="" method="post">
	<label>
    	<input type="text" name="nome" class="j_place j_um" title="Informe seu nome" />
    </label>
    
    <label>
    	<input type="text" name="idade" class="j_place j_dois" title="Informe sua idade" />
    </label>
    
    <label>
    	<textarea rows="3" name="texto" class="j_place j_texto" title="Informe um texto"></textarea>
    </label>
    
    <input type="button" value="Botão" />
    <input type="submit" value="Enviar" />
</form>

</body>
</html>