<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD PHP PDO BootStrap Modal: Ejemplo Completo | BaulPHP</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php include('container.php');?>



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
    $(document).ready(function() {
        $('#datatables').dataTable({
            "sPaginationType": "full_numbers",
            "aaSorting": [
                [0, "asc"]
            ],
            "bJQueryUI": true
        });
    })
    </script>
    <!-- fin jQuery de data table -->




<!-- Colores #33FFB9 - #563d7c -->
</head>

<body style="background-color:#33FFB9;">
    <div class="container">
        <h1 class="page-header text-center">CRUD PHP PDO BootStrap Modal</h1>
        <div class="row">
            <div>
                <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span
                        title="Agregar Registro" class="glyphicon glyphicon-plus"></span> Nuevo Reg</a>
                <br><br>
                <?php 
						session_start();
						if(isset($_SESSION['message'])){
						?>
                <div class="alert alert-info text-center" style="margin-top:20px;">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
							
							unset($_SESSION['message']);
						}
					?>

                <table id="datatables" class="table table-bordered table-striped" style="margin-top:10px;">
                    <!-- <table id="datatables" class="display" width="100%" border="5PX" cellpadding="0" cellspacing="0"  bordercolor="#4B8A08"> -->
                    <thead>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:2%">#</th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Nombre
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Direccion
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Cargo
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Salario
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Celular
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Ciudad
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Genero
                        </th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:10%">Edad</th>
                        <th class="text-center" style="background-color: #dc3545; font-black: bold; width:8%"
                            title="Opciones">Opc</th>
                    </thead>
                    <tbody>
                        <?php
								//incluimos el fichero de conexion
								include_once('dbconect.php');
								
								$database = new Connection();
								$db = $database->open();
								try{	
									$sql = 'SELECT * FROM t_datos1';
									foreach ($db->query($sql) as $row) {
									?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['cargo']; ?></td>
                            <td><?php echo $row['salario']; ?></td>
                            <td><?php echo $row['celular']; ?></td>
                            <td><?php echo $row['ciudad']; ?></td>
                            <td><?php echo $row['genero']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td>
                                <a href="#edit_<?php echo $row['id']; ?>" data-toggle="modal"><span
                                 title="Editar Registro" class="glyphicon glyphicon-edit"></span> </a>

                                <a href="#delete_<?php echo $row['id']; ?>" data-toggle="modal"><span
                                  title="Eliminar Registro" class="glyphicon glyphicon-trash"></span> </a>


                            </td>
                            <?php include('BorrarEditarModal.php'); ?>
                        </tr>
                        <?php 
									}
								}
								catch(PDOException $e){
									echo "Hubo un problema en la conexión: " . $e->getMessage();
								}
								
								//Cerrar la Conexion
								$database->close();
								
							?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('AgregarModal.php'); ?>
</body>

</html>