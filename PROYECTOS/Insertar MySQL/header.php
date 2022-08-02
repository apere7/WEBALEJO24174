<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Libreria de Bootstrap cdn ojo cambiar a la libreria dentro del proyecto -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <!-- Libreria de ajax cdn ojo cambiar a la libreria dentro del proyecto -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Libreria de Bootstrap cdn ojo cambiar a la libreria dentro del proyecto -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



  <!-- Inicio Libreria de dataTable cdn ojo cambiar a la de libreria en el proyecto -->
	<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css></script>
  <!-- Libreria de jQuery dentro del proyecto -->	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.dataTables.js" type="text/javascript"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	
<!-- jQuery de data table -->
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
	<!-- fin jQuery de data table -->
	
