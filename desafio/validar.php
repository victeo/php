<body class="cor">
<?php  
session_start();
include 'header.php';

?>
<?php 
#Sistema que consulta um arquivo e verifica a existência, permitindo o acesso
$botaologin = filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botaologin)){
	$user = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	
	if(is_int($busca1) and is_string($busca2)){
	echo 'deu certo';

	}else{
		echo 'deu erro';
	}
}else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.'Login ou senha incorretas'.'</div>';
		header('location: index.php');
}


//-------------------------------------------------------------------------------------------------------

#FUNÇÃO ONDE BUSCA O USUÁRIO ENCONTRANDO SUA LINHA E EM SEGUINDA OLHA SUA SENHA
is_array($arr = explode('/', file_get_contents('usuarios.txt')));

		 	$data2=array();
		foreach ($arr as $dat){
			$data2[] = explode(",", $dat);
		}


//faz um filtro na matriz trazendo somente a senha 

$users = array_column($data2, 0,1);//substitua o número pela posição do vetor desejada

//verifica a existência da variável user na array users
$busca1 = array_search($user,$users);

//-------------------------------------------------------------------------------------------------------
#verifica a senha se existe
is_array($arr = explode('/', file_get_contents('usuarios.txt')));

		 	$data2=array();
		foreach ($arr as $dat){
			$data2[] = explode(",", $dat);
		}


//faz um filtro na matriz trazendo somente a senha 

$senha = array_column($data2, 1,0);//substitua o número pela posição do vetor desejada

//verifica a existência da variável user na array users
$busca2 = array_search($pass,$senha);

//-------------------------------------------------------------------------------------------------------

























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
</body>