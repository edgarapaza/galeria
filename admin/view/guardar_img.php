<?php
include "header.html";
require "../models/equipos.model.php";
require "../controller/equipos.controller.php";
$consulta = new equipos();
$data = $consulta->Guardarequipos();
?>
<div class="page-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-warning">
                            <?php echo @$msg=$_REQUEST['msg'];?>
                        </div>
                    </div>
                </div>
            <form method="post" action="../controllers/equipos.controller.php">
                <div class="row">
        
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- TODO CONTENDIO -->
                                    <h3>Registro de Equipos</h3>
                                        <div class="form-group row">
                                            <label for="txtcodpatrimonial" class="col-sm-2 col-form-label">Cod Patrimonial</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtcodpatrimonial" id="txtcodpatrimonial" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtbien" class="col-sm-2 col-form-label">Nombre del Bien</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtbien" id="txtbien" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtdescripcion" class="col-sm-2 col-form-label">Descripción</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtdescripcion" id="txtdescripcion" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtmarca" class="col-sm-2 col-form-label">Marca</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtmarca" id="txtmarca" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtmodelo" class="col-sm-2 col-form-label">Modelo</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtmodelo" id="txtmodelo" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtcolor" class="col-sm-2 col-form-label">Color</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtcolor" id="txtcolor" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtserie" class="col-sm-2 col-form-label">Serie</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtserie" id="txtserie" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtdimensiones" class="col-sm-2 col-form-label">Dimensiones</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtdimensiones" id="txtdimensiones" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtestado" class="col-sm-2 col-form-label">Estado</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtestado" id="txtestado" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txtobservaciones" class="col-sm-2 col-form-label">Observaciones</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="txtobservaciones" id="txtobservaciones" required="">
                                            </div>
                                        </div>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                    <div class="card-boby">
                                            <h4>Computo</h4>
                                            <div class="form-group row">
                                                <label for="txtram" class="col-sm-2 col-form-label">ram</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" name="txtram" id="txtram" required="">
                                                </div>

                                                <label for="txtdisco" class="col-sm-2 col-form-label">disco</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" name="txtdisco" id="txtdisco" required="">
                                                </div>

                                                <label for="txtprocesador" class="col-sm-2 col-form-label">procesador</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" name="txtprocesador" id="txtprocesador" required="">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                
                                            </div>
                                            <div class="form-group row">
                                                
                                            </div>
                                            <div class="form-group row">
                                                <label for="txtgeneracion" class="col-sm-2 col-form-label">generacion</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="txtgeneracion" id="txtgeneracion" required="">
                                                </div>
                                            </div>
                                    </div>
                        </div>
                                <div class="form-group row">
                                            
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                </div>
                    
                    </div>
                </div>

            </form>
            </div>
        </div>

<?php include "footer.html"?>