 <?php  
//index.php
$connect = mysqli_connect("localhost", "root", "", "definitivaap");
$query = "SELECT * FROM personal ORDER BY id DESC";
$result = mysqli_query($connect, $query);

 ?>
 
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Insertar datos a través de Bootstrap Modal usando PHP Ajax</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
 </head>  
 <body>  

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BaulPHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="pagina1.php">Pagina1</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    

      <!-- Begin page content -->
    <div class="container" style=" width:900px">
      <div class="page-header">
         <h3 align="center">Insertar datos a través de Bootstrap Modal usando PHP Ajax</h3> 
      </div>


   
   <br/>  
   <div class="table-responsive">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary">Agregar Personal</button>
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-bordered">
      <tr>
       <th width="30%">Personal Nombres</th>  
       <th width="10%">Genero</th>  
       <th width="10%">Edad</th>  
       <th width="30%">Area</th>  
       <th width="10%">Vista</th>
      </tr>
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?>
	  
      <tr>
       <td><?php echo $row["nombres"]; ?></td>
       <td><?php echo $row["genero"]; ?></td>
       <td><?php echo $row["edad"]; ?></td>
       <td><?php echo $row["designado"]; ?></td>
       <td><input type="button" name="view" value="Vista Previa" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  
  </div>

  
  
  
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
      </div>
    </footer>


      <!-- Modal Para ingresar Personal-->
<div id="add_data_Modal" class="modal fade">
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

<!-- Disponible  -->
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



<!-- Disponible  -->
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