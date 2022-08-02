<?php 
include('header.php');
//include_once("db_connect.php"); //Oficina
include_once("db_connect.php"); //Casa
?>
<title>Eliminar registros con BootStrap Modal usando PHP & MySQL </title>
<script type="text/javascript" src="script/bootbox.min.js"></script>
<script type="text/javascript" src="script/deleteRecords.js"></script>
<?php include('container.php');?>

<div class="container">
	<table id="datatables" class="table table-striped table-bordered" style="margin-top:10px;" >              
	<thead>
	<tr>
    <th class="text-center "style="background-color: #33FFB9; font-black: bold; width:2%">#</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Nombre</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Cargo</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Salario</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Celular</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Ciudad</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Genero</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Edad</th>
	<th class="text-center" style="background-color: #33FFB9; font-black: bold; width:8%" title="Opciones">Opc</th>
	
	<!--  <th><i title="Eliminar Registro" class="glyphicon glyphicon-trash"></i></th> -->

	</tr>
	</thead> 
	
	<tbody>           
	<?php
	$sql = "SELECT * FROM t_datos1 ";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$num=0;
	while( $rows = mysqli_fetch_assoc($resultset) ) { 
	$num++;
	?>
	<tr>
	<th scope="row"><?php echo $num; ?></th>    
	<td><?php echo $rows["nombre"]; ?></td>
	<td><?php echo $rows["cargo"]; ?></td>
	<td><?php echo $rows["salario"]; ?></td>
	<td><?php echo $rows["celular"]; ?></td>
	<td><?php echo $rows["ciudad"]; ?></td>
	<td><?php echo $rows["genero"]; ?></td>
	<td><?php echo $rows["edad"]; ?></td>
	<th scope="row">
	<a class="delete_employee" data-emp-id="<?php echo $rows["id"]; ?>" href="javascript:void(0)">
	<i title="Eliminar Registro" class="glyphicon glyphicon-trash"></i>
	<i title="Editar Registro" class="glyphicon glyphicon-edit"></i>
	<i title="Editar Registro" class="glyphicon glyphicon-print"></i>
	
	</a></th>

	</tr>
	<?php
	}
	?>
	</tbody>
	
	</table>
	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.baulphp.com/eliminar-registros-con-bootstrap-modal-usando-php-mysql" title="">Retornar Tutorial</a>
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="Rep-Mod-tiquet.php" title="">Rep-con-datatable</a>
	</div>		
</div>
<?php include('footer.php');?>