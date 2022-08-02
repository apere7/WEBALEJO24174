<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Editar Empleado</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="EditarRegistro.php?id=<?php echo $row['id']; ?>">

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombre"
                                    value="<?php echo $row['nombre']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Direccion:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccion"
                                    value="<?php echo $row['direccion']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Cargo:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cargo"
                                    value="<?php echo $row['cargo']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Salario:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="salario"
                                    value="<?php echo $row['salario']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Celular:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="celular"
                                    value="<?php echo $row['celular']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Ciudad:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ciudad"
                                    value="<?php echo $row['ciudad']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Genero:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="genero"
                                    value="<?php echo $row['genero']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Edad:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="edad" value="<?php echo $row['edad']; ?>">
                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span
                        class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
                    </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Borrar Empleado</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">¿Esta seguro de Borrar el registro?</p>
                <h2 class="text-center"><?php echo $row['nombre'].' - '.$row['cargo']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="BorrarRegistro.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>