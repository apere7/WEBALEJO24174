<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$cargo = $_POST['cargo'];
			$salario = $_POST['salario'];
			$celular = $_POST['celular'];
			$ciudad = $_POST['ciudad'];
			$genero = $_POST['genero'];
			$edad = $_POST['edad'];

			$sql = "UPDATE t_datos1 SET Nombre = '$nombre',	Direccion = '$direccion', Cargo = '$cargo', Salario = '$salario', Celular = '$celular', ciudad = '$ciudad', Genero = '$genero', Edad = '$edad' WHERE id = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Empleado actualizado correctamente' : 'No se puso actualizar empleado';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: index.php');

?>