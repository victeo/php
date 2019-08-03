<?php
	session_start();
	include "header.php";
	//Salvar
	//file_put_contents('teste.txt','minha string');
	
	/*$res = fopen('teste.txt','w+');
	fwrite($res,"Minha string");
	fclose($res);*/
	
	$vet = file_get_contents("teste.txt");
	$arr = explode(",",$vet);
	foreach($arr as $v){
		$val = explode(";",$v);
		echo $val[0]."<br>";
		echo $val[1]."<br>";
		echo $val[2]."<br>";
	}
	
	
?>

<form name="teste" method="post"  action="resultado.php">
	<input type="text" name="tudo" />
	<input type="hidden" name="ret" value="<?php echo $_SERVER["REQUEST_URI"]?>">
	<input type="submit" value="Ir" />
</form>

