<?php

require('conexao.php');

$acao = ($_POST['acao'] ? $_POST['acao'] : $_GET['acao']);
$acao = mysql_real_escape_string($acao);

switch($acao){
	case 'completar':
		$search = mysql_real_escape_string($_GET['term']);
		$qr = "SELECT * FROM mod6_clientes WHERE nome LIKE '%$search%' GROUP BY nome ORDER BY nome ASC";
		$ex = mysql_query($qr) or die(mysql_error());	
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
	break;
	
	case 'pesquisar':
		$pesquisa = mysql_real_escape_string($_GET['valor']);
		$qr = "SELECT * FROM mod6_clientes WHERE nome LIKE '%$pesquisa%' ORDER BY nome ASC, sobrenome ASC";
		$ex = mysql_query($qr) or die(mysql_error());
		if(mysql_num_rows($ex) >= 1){
			while($res = mysql_fetch_assoc($ex)):
				echo '<li>';
					echo $res['nome'].' '.$res['sobrenome'].' - <strong>'.$res['telefone'].'</strong>';
				echo '</li>';
			endwhile;
		}else{
			echo '<li style="color:#900">Nada encontrado!</li>';	
		}
	break;
	
	default:
	echo 'Selecione uma ação!';
}