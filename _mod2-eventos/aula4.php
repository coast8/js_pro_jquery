<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seletores de formulários!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$('form')
			//.hide()
			.css({
					padding:		'10px',
					background:		'#fbfbfb',
					width:			'500px',
					height:			'500px',
					position:		'fixed',
					left:			'50%',
					top:			'50%',
					'margin-left':	'-250px',
					'margin-top':	'-250px'
				})
			//.fadeIn(2000);
			
		$('label').css({
				display:			'block',
				'margin-bottom':	'10px'
		});
			
		$('.tt').css({
				display:		'block',
				'margin-bottom':	'3px',
				'font-family':		'"Comic Sans MS", cursive'
		});
			
		$('form :text, form :password').css({
			display:			'block',
			'margin-bottom':	'10px',
			padding:			'5px',
			background:			'blue',
			border:				'0',
			width:				'490px',
			color:				'#fff'
		});
		
		$('form :text').hide().delay(500).fadeIn("slow");
		$('form :password').hide().delay(1000).fadeIn("slow");
		$('form :checkbox').hide().delay(1500).fadeIn("slow");
		$('form :radio').hide().delay(2000).fadeIn("slow");
		$('form :file').hide().delay(2500).fadeIn("slow");
		$('form :submit, form :reset').hide().delay(3000).fadeIn("slow");
		$('form .select').hide().delay(3500).fadeIn("slow");		
		$('form :image').hide().delay(4000).fadeIn("slow");
		
		$('form :disabled').val('Campo desabilitado!');
		
		$('form :reset').click(function(){
			$('form').slideUp(2000);
		});
	});
</script>
</head>

<body>

<form name="teste" action="" method="post">
	<label>
    	<span class="tt">Campo de Texto:</span>
        <input type="text" name="texto" disabled="disabled" />
    </label>
    
    <label>
    	<span class="tt">Campo de Password:</span>
        <input type="password" name="texto" />
    </label>
    
    <label for="checkbox">
    	<input type="checkbox" checked="checked" value="1" /> Check 1
        <input type="checkbox" value="2" /> Check 2
    </label>
    
    <label for="radio">
    	<input type="radio" name="radio" checked="checked" value="1" /> Radio 1
        <input type="radio" name="radio" value="2" /> Radio 2
    </label>
    
    <label>
    	<input type="file" name="arquivo" />
    </label>
    
    <label>
    	<input type="submit" value="enviar" />
        <input type="reset" value="limpar" />
    </label>
    
    <label>
    	<select name="teste" class="select">
        	<option value="1">Select</option>
        </select>
    </label>
    
    <label>
    	<input type="image" src="http://www.iesdeconcursos.com.br/imagens/btn-enviar-form.jpg" />
    </label>

</form>

</body>
</html>