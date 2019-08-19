<!-- formulario de registro -->

<!DOCTYPE html>
<html>
    <!-- head -->
    <head>
    	<title>Login</title>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilo.css">
    </head>

    <!-- body  -->
    <body>
    	<div class="container h-100">
    		<div class="d-flex justify-content-center h-100">
    			<div class="user_card">
    				<div class="d-flex justify-content-center">
    					<div class="brand_logo_container">
    						<img src="logo/logo_circulo.jpg" class="brand_logo" alt="Logo">
    					</div>
    				</div>
    				<div class="d-flex justify-content-center form_container">
    					<form>
          <!-- input nombre -->
    						<div class="input-group mb-3">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-user"></i></span>
    							</div>
    							<input type="text" name="" class="form-control input_user" value="" placeholder="Nombre y Apellido">
    						</div>
          <!-- input mail -->
                <div class="input-group mb-3">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="text" name="" class="form-control input_user" value="" placeholder="Escribe tu Email">
                </div>


                <!-- input contraseña -->
                <div class="input-group mb-2">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="" class="form-control input_pass" value="" placeholder="Contraseña">
                </div>

            <!-- input confirmar contraseña -->
    						<div class="input-group mb-2">
    							<div class="input-group-append">
    								<span class="input-group-text"><i class="fas fa-key"></i></span>
    							</div>
    							<input type="password" name="" class="form-control input_pass" value="" placeholder="Confirmar Contraseña">
    						</div>

            <!-- Recordarme -->
    						<div class="form-group">
    							<div class="custom-control custom-checkbox">
    								<input type="checkbox" class="custom-control-input" id="customControlInline">
    								<label class="custom-control-label" for="customControlInline">Recordarme</label>
    							</div>
    						</div>
    					</form>
    				</div>

        <!-- iniciar sesion -->
    				<div class="d-flex justify-content-center mt-3 login_container">
    					<button type="button" name="button" class="btn login_btn">Iniciar Sesión</button>
    				</div>
    				<div class="mt-4">
    					<div class="d-flex justify-content-center links">
    						¿No tienes cuenta? <a href="form_registro.php" class="ml-2">Registrate</a>
    					</div>
    					<div class="d-flex justify-content-center links">
    						<a href="#">¿Olvidaste tu contraseña?</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
