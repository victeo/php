<?php 

	#Verifica se existe
$user = 'victor';//usuário
$senha = '5555';

// Criação da Matriz multidimencional a partir do arquivo de texto
function verificar($user,$senha){
	is_array($arr = explode('/', file_get_contents('usuarios.txt')));
		 	$data2=array();

			foreach ($arr as $dat){

				$data2 = explode(",", $dat);

				$vet[] = array("id"=>$data2[0],"user"=>$data2[1],"senha"=>$data2[2]);

				
			}
	echo '<pre>';
	print_r($vet);


	$chave = array_search($user, array_column($vet, 'user'));

	//print_r($chave);

	





	if ($vet[$chave]['senha'] == $senha) {
		return true;
	}else{
		return false;
	}
}//final função


if(verificar($user,$senha)){
	echo 'login efetuado com sucesso';
}else{
	echo 'não foi possível o acesso';
}