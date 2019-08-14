<!DOCTYPE html>
<html>
	<head>
		<title>Exercício 4</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Lista II - Exercício 4</h2>
		<hr>
		<p>Digite um Numero</p>
		<form action="" method="POST">
			<input type="text" name="tBoxNumero">
			<input type="submit" name="bTTCalcular" value="Calcular">			
		</form>
			<ul>
				<?php
					if (isset($_POST['bTTCalcular'])) {
						$resultados = calcularDivisivel($_POST['tBoxNumero']);
					 	foreach ($resultados as $key => $value) {
					 		echo $value;
					 	}					 	
					} 
				?>
			</ul>
	</body>

	<?php
		function calcularDivisivel ($numero){
				if ((fmod($numero, 10)) == 0) {
					$resultadoFinal[] ='<li>O numero '.$numero.' é divisível por 10</li>';
				}
				if ((fmod($numero, 5)) == 0) {
					$resultadoFinal[] = '<li>O numero '.$numero.' é divisível por 5</li>';
				}
				if ((fmod($numero, 2)) == 0) {
					$resultadoFinal[] = '<li>O numero '.$numero.' é divisível por 2</li>';
				}
				else if (empty($resultadoFinal)) {
					$resultadoFinal[] = '<li> O numero não e divisivel por nenhuma das opções</li>';
				}
				return $resultadoFinal;
		} 
	?>
</html>