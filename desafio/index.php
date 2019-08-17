<?php  
session_start();
include 'header.php';

?>
<!-- Conteúdo dá página-->
<?php

if(isset($_SESSION['usuario'])){
    header("location: logado.php");
    exit;
}

?>
<div class="py-5 ">
    <div class="container">
      <div class="" >
			 <div class="form" >
			          <h1 class="mb-4">Login</h1>
			          <!--Mensagem de erro ao logar-->
			          <?php  
			          if(isset($_SESSION['msg'])){
				          	echo $_SESSION['msg'];
				          	unset($_SESSION['msg']);
			          }
			          ?>
			          <form class="" method="POST" action="validar.php">
			            <div class="form-group"> <input type="text" class="form-control" placeholder="Enter email" id="form9" name="usuario"> </div>
			            <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Password" id="form10" name="senha"> <small class="form-text text-muted text-right">
			                <a href="#"> Recuperar senha</a>
			              </small> </div> <input type="submit" name="botao" class="btn btn-primary" value="Logar">
			          </form>
			 </div>
		</div>
	</div>
</div>




<?php  
include 'footer.php';



?>


