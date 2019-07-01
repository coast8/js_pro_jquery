<?php
require('conexao.php');

$search = mysql_real_escape_string($_GET['term']);
$qr = "SELECT * FROM mod6_clientes WHERE nome LIKE '%$search%' ORDER BY nome ASC";
$ex = mysql_query($qr) or die(mysql_error());

//["Upinside", "Campus", "Curso", "PRO"]

$resJson = '[';
$first = true;

while($res = mysql_fetch_assoc($ex)):
	
	if(!$first):
		$resJson .= ', ';
	else:
		$first = false;
	endif;
	
	$resJson .= json_encode($res['nome']);
	
endwhile;

$resJson .= ']';

echo $resJson;