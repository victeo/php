<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 5</title>
</head>

<body>
	<form method="POST" action="">
		<input type="text" name="palavra">
		<input type="submit" name="botao" value="Verificar">
	</form>
<?php  
if(isset($_POST['botao'])){
	$palavra = $_POST['palavra'];
	for ($a=0; $a < 15; $a++) { 
	
		if (is_string($palavra )) {
			for ($i=0; $i <5 ; $i++) { 
				echo str_repeat(' '.$palavra , $i).'<br>';

			}

			for ($i=5; $i >0 ; $i--) { 
				echo str_repeat(' '.$palavra , $i).'<br>';

			}
		}
	}
}

?>


</body>
</html>