<?php 

	#Verifica se existe
$user = 'victor';
$pass = 'adadas';

// Transforma o texto em uma matriz
function verificar($user){
is_array($arr = explode('/', file_get_contents('usuarios.txt')));

		 	$data2=array();
		foreach ($arr as $dat){
			$data2[] = explode(",", $dat);
		}


//faz um filtro na matriz trazendo somente a senha 

$users = array_column($data2, 0,1);//substitua o número pela posição do vetor desejada
print_r($users);

//verifica a existência da variável user na array users
$busca1 = array_search($user,$users);
return $busca1;//caso não

}



is_array($arr = explode('/', file_get_contents('usuarios.txt')));

		 	$data2=array();
		foreach ($arr as $dat){
			$data2[] = explode(",", $dat);
		}


//faz um filtro na matriz trazendo somente a senha 

$pasw = array_column($data2, 1,0);//substitua o número pela posição do vetor desejada
print_r($pasw);

//verifica a existência da variável user na array users
$busca2 = array_search($pass,$pasw);



if(is_string($busca)){
	echo 'deu certo';

}else{
	echo 'deu certo não';
}
/*function verificar($user){
	is_array($arr = explode('/', file_get_contents('usuarios.txt')));
		$val = array();
	foreach($arr as $v){
		echo '<'
		is_array($val = explode(",",$v));

		$busca = array_search($user, $val);
		echo $busca;

		print_r($val );
	}
}




*/


	
		
	

 ?>