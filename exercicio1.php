<?php 
declare(strict_types = 1);

 ?>
<!DOCTYPE html>

<html>
<head>
	<title>Exercicio</title>
</head>
<body>

<?php
	
	function incrementa(int $numero, string $numero2=""):int{
		$numero++;
		return  $numero;
	}

	$a ='5';
	try
	{
		$a = incrementa($a);
		echo $a.'<br>';
	}
	catch(TypeError $e){
		var_dump($e);
		echo 'dasdadsad';
		exit;
	}
	
?>
</body>
</html>