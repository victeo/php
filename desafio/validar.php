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
#abre o arquivo com os dados dos usuários
	$dados = file_get_contents('usuarios.txt');

	#Verifica se existe
	
	$passe = 0;
	#verifica a senha no banco de dados
	echo verificar($user);
	if($senha==$passe){

			if($user==$arr[0]){
				echo 'Olá! Você foi autenticado com sucesso. Seu usuário é o'.$user.'<br>';
				echo $senha;
				



			}else{

				$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.'Login ou senha incorretas'.'</div>';
				header('location: index.php');
			}
		
	} else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.'Login ou senha incorretas'.'</div>';
		header('location: index.php');
			}
}
#FUNÇÃO ONDE BUSCA O USUÁRIO ENCONTRANDO SUA LINHA E EM SEGUINDA OLHA SUA SENHA
function verificar($user){
	is_array($arr = explode('/', file_get_contents('usuarios.txt')));
	foreach($arr as $v){
	is_array($val = explode(",",$v));
	print_r($val);

	}
	$busca = array_search($user, array_column($arr,'0'));
	$passe = $arr[$busca]['1'];
	echo $passe;

	
		
	
}


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