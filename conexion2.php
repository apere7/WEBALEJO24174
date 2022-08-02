<?php
// Codigo para conexiones a PostgreSQL
function nueva_conexion() {

	
	//codigo para conectarse en la OFICINA B/D POSTGRESQL lOCALHOST
	$user = 'postgres';
	$passwd = '654321';
	$db = 'mibasedatos';
	$port = 5433;
	$host = 'localhost';
		
	/*
	//codigo para conectarse en la Casa B/D POSTGRESQL lOCALHOST
	$user = 'postgres';
	$passwd = '123456';
	$db = 'cmdbvaca';
	$port = 5432;
	$host = 'localhost';
	*/
	
	//codigo para conectarse al servidor de cantv
	
	/*
	//codigo para conectarse al servidor casique B/D calidad_sstap POSTGRESQL  
	$user = 'sstap-admin';
	$passwd = 'ambiente';
	$db = 'calidad_sstap';
	$port = 5477;
	$host = '161.196.29.232';
	*/
	

	/*
	//codigo para conectarse al servidor casique B/D AplicacionesCmdb POSTGRESQL 
	$user = 'admreq';
	$passwd = 'CantvADM2014#';
	$db = 'AplicacionesCmdb';
	$port = 5477;
	$host = '161.196.29.232';
	*/

		

	$conexion = pg_connect("host=$host port=$port dbname=$db user=$user password=$passwd") or die ("Error de conexion. ". pg_last_error());
	// Si la conexion es correcta se ejecuta el resto del codigo, si no, muestra el error.
	return $conexion;
}
function nueva_consulta($cadena_consulta) {
	// Script para realizar una consulta a la base de datos, recibe la cadena de consulta
	$conexion = nueva_conexion();
	return $resultado = pg_query($conexion,$cadena_consulta);
	pg_close($conexion);
}
?>