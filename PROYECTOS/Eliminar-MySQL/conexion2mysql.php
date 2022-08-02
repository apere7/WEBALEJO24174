<?php
function nueva_conexion() {
	
	//Codigo para conectarse al servidor de la casa MYSQL
	$user = 'root';
	$passwd = '';
	$db = 'definitivaap';
	$port = 5432;
	$host = 'localhost';
	
	/*
	//Codigo para conectarse al servidor de la Oficina MYSQL
	$user = 'root';
	$passwd = '';
	$db = 'ticket';
	$port = 5432;
	$host = 'localhost';
	*/
	

	$conexion =  mysql_pconnect("host=$host port=$port dbname=$db user=$user password=$passwd") or die ("Error de conexion. ". pg_last_error());
	// Si la conexion es correcta se ejecuta el resto del codigo, si no, muestra el error.
	return $conexion;
}


	/*
function conectar_boss($cadena_consulta) {
	// Script para realizar una consulta a la base de datos, recibe la cadena de consulta
	$conexion = nueva_conexion();
	return $resultado = mysql_select_db("ticket");
	$mysqli->close();
}
	*/
	
?>




