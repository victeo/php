<?php  
session_start();
include 'header.php';

?>
<!-- Conteúdo dá página-->
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


<style type="text/css">

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>


<?php  
include 'footer.php';

?>


