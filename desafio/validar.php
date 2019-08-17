<?php  
session_start();
	


?>
<?php 
#Sistema que consulta um arquivo e verifica a existência, permitindo o acesso
$botaologin = filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botaologin)){
	$user = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	
	verificar($user,$senha);

		if(verificar($user,$senha)){
			

			header('location: logado.php');



		}else{


		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.'Login ou senha incorretas'.'</div>';
		header('location: index.php');



		}


}else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.'Login ou senha incorretas'.'</div>';
		header('location: index.php');

}



//-------- Função de verificação de existência de usuário e senha ---------
function verificar($user,$senha){
	is_array($arr = explode('/', file_get_contents('usuarios.txt')));
		 	$data2=array();

			foreach ($arr as $dat){

				$data2 = explode(",", $dat);

				$vet[] = array("id"=>$data2[0],"user"=>$data2[1],"senha"=>$data2[2]);

				
			}
	echo '<pre>';
	//print_r($vet);


	$chave = array_search($user, array_column($vet, 'user'));

	//print_r($chave);

	





	if ($vet[$chave]['senha'] == $senha) {
		$_SESSION['usuario'] = $vet[$chave];
		
		return true;
	}else{
		return false;
	}
}
//----------------------final função--------------------------






















#Sistema que só grava o usuário
/*$botaologin = filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);
if(isset($botaologin)){
	$user = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	if (!empty($user) and !empty($senha)) {
			//Cria o arquivo
			$arquivo = fopen('usuarios.txt','a');
			//Verifica se foi criado
			if ($arquivo == false) die('Não foi possível criar o arquivo.');
			//Escreve no arquivo
			$texto = $user;
			fwrite($arquivo, $texto);
			//Fechamos o arquivo após escrever nele
			fclose($arquivo);

			//Pega todo conteúdo do arquivo aberto como uma string
			$dados = file_get_contents('usuarios.txt');

			$arr = explode(',', $dados);
				foreach($arr as $v){
					$val = explode(";",$v);
					echo 'Olá meu caro '.$val[0]."<br>";
					
				}

		
	}else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.'Login ou senha incorretas'.'</div>';
		header('location: index.php');
	}




}else{
	$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.' Algo inesperado aconteceu'.'<a href="#" class="alert-link">'.' Clique aqui '.'</a>'.'Para enviar uma mensagem ao administrador do site.'.'</div>';
	header('location: index.php');
}*/



?>
