<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conexão e cadastro assíncrono!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/crud.js"></script>
<link rel="stylesheet" type="text/css" href="css/aula4.css" />

</head>

<body>

<div class="resposta">
	<strong>CADASTR-SE</strong>
    <div class="msg"></div>
</div>

<form name="cadastro" action="" method="post">
	<label>
    	<span class="campo">Nome:</span>
    	<input type="text" name="nome" />
    </label>
    
    <label>
    	<span class="campo">Sobrenome:</span>
    	<input type="text" name="sobrenome" />
    </label>
    
    <label>
    	<span class="campo">E-mail:</span>
    	<input type="text" name="email" />
    </label>
    
    <label>
    	<span class="campo">Telefone:</span>
    	<input type="text" name="telefone" />
    </label>
    
    <label>
    	<span class="campo">Senha:</span>
    	<input type="text" name="senha" />
    </label>
    
    <input type="button" value="Enviar Dados" class="btn j_buttom" />	
</form>

</body>
</html>