<?php 

	#Verifica se existe
$user = '123';
verificar($user);



function verificar($user){
	is_array($arr = explode('/', file_get_contents('usuarios.txt')));
	
	foreach($arr as $v){
		is_array($val = explode(",",$v));

		$busca = array_search($user, $val);
		echo $busca;
	}
}
	


	
		
	

 ?>