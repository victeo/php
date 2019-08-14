<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
</head>
<body>
	<h3>Verifique se o número escolhido é divisível por 10, 5 ou 2</h3>
	<form method="POST" action="">
		<input type="text" name="num1">
		<input type="submit" name="botao" value="Verificar">
	</form>
	<?php 
	if (isset($_POST['botao'])) {
		$num1 = $_POST['num1'];
		if (is_numeric($num1)) {
			$resultado = calculardivisão($num1);
				foreach ($resultado as $key => $value) {
					echo $value;
				}
		}

	}
#testando as divisões
function calculardivisão($num1){

	if((fmod($num1, 10))==0){
		$resultados [] = 'Esse número é divisível por 10'.'<br>';

	}
	if((fmod($num1, 2))==0){
		$resultados [] = 'Esse número é divisível por 2'.'<br>';

	}
	if((fmod($num1, 5))==0){
		$resultados [] = 'Esse número é divisível por 5'.'<br>';

	}
return $resultados;
}
	?>


</body>
</html>