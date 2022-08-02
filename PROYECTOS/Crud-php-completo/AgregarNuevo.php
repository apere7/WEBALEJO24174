<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO t_datos1 (Nombre, Direccion, Cargo, Salario, Celular, Ciudad,  genero,  edad) 
        VALUES (:nombre, :direccion, :cargo, :salario, :celular, :ciudad, :genero, :edad)");
       
        //instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombre' => $_POST['nombre'] ,
													':direccion' => $_POST['direccion'] ,
                                                    ':cargo' => $_POST['cargo'] ,
                                                    ':salario' => $_POST['salario'],
                                                    ':celular' => $_POST['celular'],
                                                    ':ciudad' => $_POST['ciudad'],
                                                    ':genero' => $_POST['genero'],
                                                    ':edad' => $_POST['edad'])) ) ? 'Empleado guardado correctamente' : 'Algo salió mal. No se puede agregar Empleado';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: index.php');
	
?>