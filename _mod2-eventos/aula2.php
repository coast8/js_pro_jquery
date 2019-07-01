<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lógica de desenvolvimento com jQuery!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

	$(function(){
		/*
		$('h1').css("color","#069");
		$('h1').hide();
		$('h1').delay('1000');
		$('h1').fadeIn("slow");
		$('h1').text('UPINSIDE TECNOLOGIA');
		*/
		
		/*
		$('h1').css("color","#606").hide().delay('1000').fadeIn("slow").text("UPINSIDE TECNOLOGIA 2");
		*/
		
		/*
		$('h1')
			.css("color","#F60")
			.hide().delay('1000')
			.fadeIn("slow")
			.text("UPINSIDE TECNOLOGIA 3");
		*/
		
		/*
		$('h1')
			.css("color","#F66")
			.hide().delay('1000')
			.fadeIn("slow")
			.text("UPINSIDE TECNOLOGIA 4")
			.click(function(){
				$('body').css("background","#C30");
				$('h1').css("color","#fff");
			});
		*/
		
		$('a').css({color: 'red', display: 'block'});
		$('.2').css("color","#000");
		$('#3').css("color","green");
		$('*').css("padding","10px");
		$('h1, #3').css("border-bottom","solid 3px red");
	});

</script>
</head>

<body>

<h1>Estudando jQuery na UpInside!</h1>
<a href="#">Link 1</a>
<a href="#" class="2">Link 2</a>
<a href="#" id="3">Link 3</a>

</body>
</html>