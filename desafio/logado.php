<?php  
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: index.php');
	exit;
}
include 'header.php';
?>
<?php

//echo $_SESSION['usuario']["user"].', login efetuado com sucesso';
is_array($arr = explode('/', file_get_contents('usuarios.txt')));
$data2=array();

foreach ($arr as $dat){

	$data2 = explode(",", $dat);

	$vet[] = array("id"=>$data2[0],"user"=>$data2[1],"senha"=>$data2[2],"email"=>$data2[3]);


}
//echo '<pre>';
//print_r($vet);
//------------------------
function tabela($vet){
?>
	<table class="table table-light">
		<thead class="thead-dark">

		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">Senha</th>
			<th scope="col">Email</th>
		</tr>
<?php
	foreach ($vet as $value) { 

		foreach ($value as $val) { 
?>
				<td><?php echo $val; ?></td>
			<?php } ?>
				
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
			<form>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" placeholder="ID" name="ID">
					</div>
					<div class="col-4">
						<input type="text" class="form-control" placeholder="Nome" name="nome">
					</div>
					<div class="col">
						<input type="text" class="form-control" placeholder="Senha" name="senha">
					</div>
					<div class="col-4">
						<input type="email" class="form-control" placeholder="email" name="email">
					</div>
					<div class="col">
						<input type="submit" name="cadastro"class="form-control btn btn-success" value="Enviar">
					</div>
				</div>
			</form>
			
		</div>
	</div>
	<div class="row caixa2">
				<?php echo tabela($vet);  ?>
	</div>

</div>
<?php


if (isset($_POST['cadastro'])) {

	$iscrivido = 'oitudo bem';

	//array('id'=>$_POST['ID'],'user'=>$_POST['nome'],'senha'=>$_POST['senha'],'email'=>$$_POST['email']);

			//Cria o arquivo ou abre caso já exista
			$arquivo = fopen('usuarios1.txt','a+');
			
			
			if ($arquivo == false) die('Não foi possível criar o arquivo.');
			//Escreve no arquivo
			
			fwrite($arquivo, $iscrivido);
			//Fechamos o arquivo após escrever nele
			fclose($arquivo);
}
	

?>


<?php  
include 'footer.php';

?>