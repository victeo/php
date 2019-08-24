<?php  
session_start();
/*if(!isset($_SESSION['usuario'])){
	header('location: index.php');
	exit;
}*/
include 'header.php';
?>
<?php

//echo $_SESSION['usuario']["user"].', login efetuado com sucesso';
is_array($arr = explode('/', file_get_contents('usuarios.txt')));
//echo '<pre>';
//print_r($arr);

$data2=array();

foreach ($arr as $dat){

	$data2 = explode(",", $dat);
	if($data2[1]!=""):
		$vet[] = array("id"=>$data2[0],"user"=>$data2[1],"senha"=>$data2[2],"email"=>$data2[3]);
		$_SESSION['valores'][$data2[0]] = array("id"=>$data2[0],"user"=>$data2[1],"senha"=>$data2[2],"email"=>$data2[3]); 

	endif;
}
//echo '<pre>';

/*$_SESSION['vet'] = $vet;
print_r($_SESSION['vet']);
print_r($vet);
*/

//--------puxa dados ------------


	$_SESSION['i'] = $data2[0] + 1;


	if (isset($_POST['cadastro']) ) {

		if(!empty($_POST['nome']) and !empty($_POST['senha']) and !empty($_POST['email'])){
			


			$iscrivido = array('id'=>$_SESSION['i'],'user'=>$_POST['nome'],'senha'=>$_POST['senha'],'email'=>$_POST['email']);
			$escrever = '';
			$escrever .= "/";

			$escrever .= implode(',',$iscrivido);

			//Cria o arquivo ou abre caso já exista
			$arquivo = fopen('usuarios.txt','a+');
			
			
			if ($arquivo == false) die('Não foi possível criar o arquivo.');
			//Escreve no arquivo
			//fwrite($arquivo, '/');
			fwrite ($arquivo, $escrever);
			//Fechamos o arquivo após escrever nele
			fclose($arquivo);




		}


	}
	//echo '<pre>';
	if(isset($_POST['deletardados'])):
		$id_del = explode(' ', $_POST['deletardados']);

		unset($_SESSION['valores'][$id_del[1]]);


		
		//print_r($_SESSION['valores']);

		foreach ($_SESSION['valores'] as $key => $value2) {
			
			$salvar[] = implode(',', $value2);
			
		}

		$salvar2 = implode('/', $salvar);

		unset($_SESSION['valores']);

	//	print_r($salvar2);

		//Cria o arquivo ou abre caso já exista
			$arquivo2 = fopen('usuarios.txt','w+');
			
			
			if ($arquivo2 == false) die('Não foi possível criar o arquivo.');
			//Escreve no arquivo
			//fwrite($arquivo, '/');
			fwrite ($arquivo2, $salvar2);
			//Fechamos o arquivo após escrever nele
			fclose($arquivo2);



	endif;

//-----------------

function tabela($vet){
	?>
	<table class="table table-light">
		<thead class="thead-dark">

			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">Senha</th>
				<th scope="col">Email</th>
				<th scope="col">Ação</th>

			</tr>
			<?php
			foreach ($vet as $value) { 

				foreach ($value as $chv=>$val) {
				
					?>
					<td><?php echo $val; ?></td>
				<?php } ?>
				<td>
					<form method="POST">
					<input type="submit" name="deletardados" class="btn btn-primary btn-user btn-block" value="Deletar <?php echo $value['id']?>">
					</form>
				</td>
			</tr>


		<?php }



		?>
		<thead class="thead-dark">

		</table>



		<?php

	}		?>

	<!--Php acaba aqui-->
	<div class="py-5 text-center" >
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-5 col-md-7 col-10">
					<h1 class="text-white">Página de cadastro</h1>
					<p class="mb-3 text-white">Faça a inscrição dos usuários</p> 
				</div>
			</div>
		</div>
	</div>
	<!--Final cabeçalho -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 caixa">
				<form method="POST" action="">
					<div class="form-row">

						<div class="col-4">
							<input type="text" class="form-control" name="nome">
						</div>
						<div class="col">
							<input type="text" class="form-control" name="senha">
						</div>
						<div class="col-4">
							<input type="email" class="form-control"  name="email">
						</div>
						<div class="col">
							<input type="submit" name="cadastro" class="form-control btn btn-success" value="Enviar">
						</div>
					</div>
				</form>

			</div>
		</div>

		<div class="row caixa2">
			<?php echo tabela($vet);  ?>
		</div>

	</div>
