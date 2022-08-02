<?php
  require 'conexion2mysql.php';
  include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rep-Mod-tiquet.php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Para boostra5 DataTables -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></script>
	<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css></script>
	
	
	<title>Rep-Mod</title>
	<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
	<script src="js/jquery.js" type="text/javascript"> </script>
	<script src="js/jquery.dataTables.js" type="text/javascript"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	
		<style type="text/css">
		@import "css/demo_table_jui.css";
		@import "themes/smoothness/jquery-ui-1.8.4.custom.css";
	</style>
	
		<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$('#datatables').dataTable({
				"sPaginationType":"full_numbers",
				"aaSorting":[[0, "asc"]],
				"bJQueryUI":true
			});
		})
		
		
	</script>

</head>
<body style="background-color:#33FFB9;">
		<img src="img/imagen01-cantv.gif" style="width:100%;">
            <div class="row">
				<h2 style="text-align:center">Reporte Tareas-nuevas</h2>
				<center><a href="index.php" class="btn btn-primary">Regresar</a></center>
			</div>
	
	
	<div>
<!-- <table id="datatables" class="table table-bordered table-dark" class="table-responsive-sm">  -->
<!-- <table id="datatables" class="display" width="100%" border="5PX" cellpadding="0" cellspacing="0"  bordercolor="#4B8A08"> -->
<table id="datatables" class="table table-striped table-bordered"> 

		<thead>

		<tr>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">ID</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">FECHA</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">#TIQUE</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">ESTADO</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">USUARIO</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">CORREO</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">AREA</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">TIPO</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">FALLA</th>
			<th class="text-center" style="background-color: #dc3545; color: black; font-black: bold;">SOLUCION</th>
		</tr>
		</thead>
		
  <?php
  $con = mysqli_connect("localhost", "root", "", "ticket");
  $result = mysqli_query($con,"select * from ticket"); // El resultado de la consulta
  while($row = mysqli_fetch_array($result)) { // El ciclo que convierte el resultado de la consulta en arreglos
?>


<tr>
	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['fecha'] ?></td>
	<td><?php echo $row['serie'] ?></td>
	<td><?php echo $row['estado_ticket'] ?></td>
	<td><?php echo $row['nombre_usuario'] ?></td>
	<td><?php echo $row['email_cliente'] ?></td>
	<td><?php echo $row['departamento'] ?></td>
	<td><?php echo $row['asunto'] ?></td>
	<td><?php echo $row['mensaje'] ?></td>
	<td><?php echo $row['solucion'] ?></td>
	
 </tr>

<?php
	}
?>
</table>

<div class="modal fade" id="modalcrud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> ... </div>


</div>
</body>
</html>













