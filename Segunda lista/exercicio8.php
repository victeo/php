<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 8</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<?php  
static $chico = 1.5; //	cresce 2 centímetros por ano
static $juca =  1.10; // cresce 3 centímetros por ano
$dia = date("Y");

while ($juca <= $chico) {
	$juca+=0.3;
	$chico+=0.2;
	$ano = date('Y', strtotime('1 year', strtotime($dia)));
}

         
?>
<!--Expor resultados-->
<div class="container">
  <div class="row">
    <div class="col">
    	<div class="alert alert-primary" role="alert">
      		<?php echo $juca; ?>
      	</div>
    </div>
    <div class="col">
    	<div class="alert alert-primary" role="alert">
     		<?php echo $ano; ?>
     	</div>
    </div>
  </div>
</div>

</body>
</html>