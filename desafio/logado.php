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

				$vet[] = array("id"=>$data2[0],"user"=>$data2[1],"senha"=>$data2[2]);

				
			}
	echo '<pre>';
	echo '<table class="table">';
	//print_r($vet);
//------------------------
	foreach ($vet as $value) { ?>
		
		
			<tr>
				<td><?php echo $value["id"]; ?></td>
				<td><?php echo $value["user"]; ?></td>
				<td><?php echo $value["senha"]; ?></td>
			</tr>
	
	
	<?php }


	echo '</table>';






?>
	<?php  
	include 'footer.php';

?>