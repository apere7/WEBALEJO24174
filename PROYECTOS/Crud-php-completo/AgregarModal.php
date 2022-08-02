<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

<!--  <div class="alert alert-info alert-styled-left text-blue-800 content-group"> -->
<div>
<div class="alert alert-danger" role="alert">


<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <center><h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4></center>
</div>


            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="AgregarNuevo.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Direccion:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccion">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Cargo:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cargo">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Salario:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="salario">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Celular:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="celular">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Ciudad:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ciudad">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Genero:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="genero">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Edad:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="edad">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span
                        class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
                </form>
            </div>

        </div>
    </div>
</div>