   <?php  
  //index.php
   $connect = mysqli_connect("localhost", "root", "", "definitivaap");
   $query = "SELECT * FROM t_datos1 ORDER BY id DESC";
   $result = mysqli_query($connect, $query);

   ?>
   

   <!DOCTYPE html>
   <html>
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <!-- Libreria de Bootstrap cdn ojo cambiar a la libreria dentro del proyecto -->
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	
    <!-- Libreria de ajax cdn ojo cambiar a la libreria dentro del proyecto -->
     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <!-- Libreria de Bootstrap cdn ojo cambiar a la libreria dentro del proyecto -->
     <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->



    <!-- Inicio Libreria de dataTable cdn ojo cambiar a la de libreria en el proyecto -->
    <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css></script>
		<!-- Para boostra5 DataTables -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></script>
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
  <?php 

  include_once("db_connect.php"); //Casa
  ?>
  <title>Agrega registros con BootStrap Modal usando PHP & MySQL </title>
  <script type="text/javascript" src="script/bootbox.min.js"></script>
  <script type="text/javascript" src="script/deleteRecords.js"></script>
  </head>
  <body class="">
    <div role="navigation" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="https://www.baulphp.com" class="navbar-brand">Alejandro</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.baulphp.com">Portada</a></li>
            
          </ul>
          
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container" style="min-height:500px;">

  <!-- ***** Boton de Agregar -Tabla - ID de dataTables *****-->
     <div class="container">
       <h4>pagina1 insertar registros con BootStrap Modal usando PHP & MySQL  Se le esta agregando datatable, editar y imprimir</h4>
       <div class="table-responsive">
         <div align="right">
           <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary">Agregar Personalpag1
		   </button>
         </div>
		 
		 
		 
            <br>
         <table id="datatables" class="table table-striped table-bordered">              
           <thead>
             <tr>
              <th class="text-center "style="background-color: #33FFB9; font-black: bold; width:auto">#</th>
              <th class="text-center" style="background-color: #33FFB9; font-black: bold; width:auto">Nombre</th>
              <!-- <th class="text-center" style="background-color: #33FFB9; font-black: bold; width:10%">Direccion</th> -->
              <th class="text-center" style="background-color: #33FFB9; font-black: bold; width:auto">Genero</th>
              <th class="text-center" style="background-color: #33FFB9; font-black: bold; width:auto">Cargo</th>
              <th class="text-center" style="background-color: #33FFB9; font-black: bold; width:auto">Edad</th>
              <th class="text-center" style="background-color: #33FFB9; font-black: bold; width:auto" title="Opciones">Opc</th>
            </tr>
          </thead> 
          
          <tbody>           
            <?php
            while($row = mysqli_fetch_array($result))
            {
              ?>
              <tr>
               <td><?php echo $row["id"]; ?></td>
               <td><?php echo $row["nombre"]; ?></td>
               <!-- <td><?php echo $row["direccion"]; ?></td> -->
               <td><?php echo $row["genero"]; ?></td>
               <td><?php echo $row["cargo"]; ?></td>
               <td><?php echo $row["edad"]; ?></td>
               <td><input type="button" name="view" value="Vista Previa" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
             </tr>
            <?php
			  }
			?>
         </tbody>
         
       </table>
       
       <div style="margin:50px 0px 0px 0px;">
        <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="Rep-Mod-tiquet.php" title="">Rep-con-datatable</a>
      </div>
    </div>	
  </div>

  <!-- ***** Modal Para ingresar Personal-->
  <div id="add_data_Modal" class="modal fade in">
   <!-- ***** Aqui puedes alargar el modal (modal-lg) (style='min-width 700px') -->
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Ingresar personal</h4>
    </div>
    <div class="modal-body">
      <form id="insert_form" action="insertar.php" method="post">
       <label>Ingrese nombre de personal</label>
       <input type="text" name="nombres" id="name" class="form-control" />
       <br />
       <label>Direccion del personal</label>
       <textarea name="direccion" id="address" class="form-control"></textarea>
       <br />
       <label>Selecione genero</label>
       <select name="genero" id="gender" class="form-control">
        <option value="Hombre">Hombre</option>  
        <option value="Mujer">Mujer</option>
      </select>
      <br />  
      <label>Designado</label>
      <input type="text" name="designado" id="designation" class="form-control" />
      <br />  
      <label>Edad</label>
      <input type="text" name="edad" id="age" class="form-control" />
      <br />
      <input type="submit" name="insert" id="insert" value="Ingresar personal" class="btn btn-success" />
    </form>


  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>
  </div>
  </div>
  </div>

  <!-- Modal Para ver Personal Detalles  -->
  <div id="dataModal" class="modal fade">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Personal Detalles</h4>
    </div>
    <div class="modal-body" id="personal_detalles">

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
  </div>
  </div>

  <script>  
    $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();  
      if($('#name').val() == "")  
      {  
       alert("Name is required");  
     }  
     else if($('#address').val() == '')  
     {  
       alert("Address is required");  
     }  
     else if($('#designation').val() == '')
     {  
       alert("Designation is required");  
     }
     
     else  
     {  
       $.ajax({  
        url:"insertar.php",  
        method:"POST",  
        data:$('#insert_form').serialize(),  
        beforeSend:function(){  
         $('#insert').val("Inserting");  
       },  
       success:function(data){  
         $('#insert_form')[0].reset();  
         $('#add_data_Modal').modal('hide');  
         $('#employee_table').html(data);  
       }  
     });  
  }  
  });




   $(document).on('click', '.view_data', function(){
    //$('#dataModal').modal();
    var personal_id = $(this).attr("id");
    $.ajax({
     url:"VistaPrevia.php",
     method:"POST",
     data:{personal_id:personal_id},
     success:function(data){
      $('#personal_detalles').html(data);
      $('#dataModal').modal('show');
    }
  });
  });
  });  
  </script>

  </body>  
  </html>  