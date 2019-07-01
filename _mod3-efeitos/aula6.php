<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Funções e campos dinâmicos!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/aula6.js"></script>
<link rel="stylesheet" type="text/css" href="css/aula6.css" />

</head>

<body>

<span class="exemplo">DEBUG AQUI</span>

<?php
if(!empty($_POST)){
	echo '<pre>';
		print_r($_POST);
	echo '</pre>';
};?>

<form action="" method="post" name="campos_dinamicos">

	<input type="text" name="texto[]" /> &laquo;
    <div class="campos"></div>
    
    <div class="acao">
    	<input type="button" class="j_disparar" value="disparar" />
        <input type="button" class="j_add" value="+" />
        <input type="button" class="j_anexo" value="&" />
        <input type="button" class="j_clear" value="X" />
    </div>

</form>

</body>
</html>