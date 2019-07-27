<!DOCTYPE html>
<html>
<head>
	<title>Exercício7</title>
</head>
<body>
<form method="POST" action="">
	<input type="text" name="num1">
	<select name="operadores">
		<option value="1">Soma</option>
		<option value="2">Subtração</option>
		<option value="3">Multiplicação</option>
		<option value="4">Divisão</option>

	</select>
	<input type="text" name="num2">
<input type="submit" name="botao" value="calcular" />
</form>
<?php

/*function calculo($num1, $num2, $operador) {
	switch ($operador) {
		case '1':
			$result = $num1 + $num1;
			break;
		case '2':
			$result = $num1 - $num1;
			break;
		
		case '3':
			$result = $num1 * $num1;
			break;
		case '4':
			$result = $num1 / $num1;
			break;
		
	
	}
	return $result;
}

if (isset($_POST['botao'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operador = $_POST['operadores'];
	$media = calculo($num1, $num2, $operador);
	echo $media;
	
}
*/

if (isset($_POST['botao'])) {
	$num1 = (float)str_replace(",",".",$_POST['num1']);
	$num2 = (float)$_POST['num2'];
	$operador = $_POST['operadores'];
	if(is_string($num1)){
		echo "string";
	}

	switch ($operador) {
			case '1':
				echo str_replace(".",",",soma($num1, $num2));
				break;
			case '2':
				echo subtracao($num1, $num2);
				break;
			
			case '3':
				echo multiplicacao($num1, $num2);
				break;
			case '4':
				echo divisao($num1, $num2);
				break;
	}
}
function soma($num1, $num2){
		return $num1 + $num2;

}
function subtracao($num1, $num2){
		return $num1 - $num2;

}
function multiplicacao($num1, $num2){
		return $num1 * $num2;

}
function divisao($num1, $num2){
		return $num1 / $num2;

}





?>

</body>
</html>