<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aula prática de utilização!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/aula5.js"></script>
<link rel="stylesheet" type="text/css" href="css/aula5.css" />

</head>

<body>

<div class="carregando">
	<img src="img/load.gif" alt="Carregando" title="Carregando" /> Aguarde carregando...
</div><!-- /carregando -->

<div class="form">
	<?php
		if(!empty($_POST)){
			echo '<pre>';
				print_r($_POST);
			echo '</pre>';	
		}
	?>

	<form action="" method="post">
    	<label>
        	<div class="field">E-mail:</div>
            <input type="text" name="email" />
            <span class="erro email">Erro e-mail</span>
        </label>
        
        <label>
        	<div class="field">Senha:</div>
            <input type="password" name="senha" />
            <span class="erro senha">Erro senha</span>
        </label>
    
    	<input type="submit" value="Logar-se" class="j_btn" />
    </form>
</div>



<img src="http://www.hdwallpapers.in/walls/abstract_color_background_picture_8016-wide.jpg" style="display:none" />

</body>
</html>





