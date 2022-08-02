<?php
  //https://www.youtube.com/watch?v=T4UZEXH-CTE
	require 'conexion4.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Pag.Principal</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap-3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-3.0.0/css/jquery.dataTables.min.css">
		
	</head>
	<body style="background-color:#33FFB9;">
	<body class="body" center>
		<img src="imagenes/imagen01-cantv.gif" style="width:100%;">
		<div class="container">
		
		
<!-- Espacio para añadir los botones de los modals -->
				<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<h4 class="pull-right"><strong>Administrador:</strong> Alejandro Pereira</h4>
						</div>
				</div>
				
				

				<div class="container">
					<center><a href="../../index.php" class="btn btn-primary">Regresar</a></center>
				</div>

		
			<br>
			<div class="panel-group">
	
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<br><br><br><br><br>

				<div class="modal-dialog modal-sm">
					<div class="modal-content">		
						<form action="sesion.php" method="POST">
								<div class="modal-header" style="background-color:#006bb3;color:white;">
								<h4 class="modal-title"><center> Login Principal </center> </h4> 
							</div>
							<div class="modal-body">
								<div class="form-group">
									<?php
										if (isset($alerta)) {
											echo '<label>Usuario: <span class="text-danger">'.$alerta.'</span></label>';
										} else {
											echo '<label>Usuario:</label>';
										}
									?>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input id="usuario" type="text" class="form-control" name="usuario" placeholder="Usuario" required>
									</div>
									<br>
									<label>Contraseña:</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input id="password" type="password" class="form-control" name="contrasena" placeholder="Contrasena" required>
									</div>
								</div>
							</div>
							<div class="modal-footer" style="background-color:#e6e6e6;">
								<button type="submit" id="boton_submit" name="_formulario_login" class="btn btn-success">Entrar <span class="glyphicon glyphicon-ok"></span></button>
								
							</div>
							
							

						</form>
					</div>

				</div>
			</div>
			
		</div>
	
		
	</body>
	<script src="bootstrap-3.0.0/js/jquery-3.1.1.min.js"></script>
	<script src="bootstrap-3.0.0/js/bootstrap.min.js"></script>
	<script src="bootstrap-3.0.0/js/jquery.dataTables.min.js"></script>
</html>	