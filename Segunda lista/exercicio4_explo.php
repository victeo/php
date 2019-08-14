<!DOCTYPE html>
<html>
<head>
	<title>Exercicio4 Explode</title>
</head>
<body>
<h1>Indique suas notas separadas por , (vírgula)</h1>
<form method="POST" action="">
	<input type="text" name="nome">
	<input type="text" name="notas">
	<button type="submit">Saber</button>
</form>
<?php
	$nome =  $_POST['nome'];
	$notas = $_POST['notas'];
	$notas = explode(",", $notas);

	$media = number_format((($notas[0]+$notas[1]+$notas[2])/3)*10,1,',','');

		echo '<h3 style="color:blue">'."Meu amigo ".$nome.'do total de 100 pontos sua média final é '.$media.'</h3>';
		
		if($media<=50){
			echo '<h3 style="color:red">'.'Meu amigo, você precisa estudar mais, pois está'.'</h3>'.'<h1 style="color:red">'.'REPROVADO!'.'</h1>';

		}else{
			echo '<h3 style="color:blue">'.'Pode comemorar com a mamãe, pois você está'.'</h3>'.'<h1 style="color:blue">'.'PROVADO!'.'</h1>';
		}
?>
</body>
</html>