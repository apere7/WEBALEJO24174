<?php
session_start();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

	$conn = mysqli_connect("localhost", "root","", "definitivaap");
	$sql_consulta = "SELECT * FROM t_usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
	$resultado_consulta = mysqli_query($conn, $sql_consulta);
	$row = mysqli_fetch_array($resultado_consulta);
	

	
	if($row>0){
		$_SESSION['nombre_usuario']=$usuario;
		header("location:website-menu-03/index.php");
	}else{
		
			echo '
	<script> 
			alert("Usuario no existe, por favor Verifique los datos Introducidos");
			window.location = "index.php";
	</script>
	';
	exit;
		
	}

?>

*/ Con esto abre la pagina de administrador.php o de cliente.php
	if($row['id_rol']==1){ //Administrador
		header("location:admin.php")
	
	}else{	
		if($row['id_rol']==2){ //cliente
		header("location:cliente.php")
	}
	else{
		echo "Datos incorrectos!";
	}
	

	
/*




file:///C:/xampp/htdocs/www/WEBALEJO24174/website-menu-03/index.html