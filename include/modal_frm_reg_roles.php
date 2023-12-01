 
 
 
 
 <!-- Large modal -->
 <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar_usuario">+Nuevo</button>

<div class="modal fade registrar_usuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Roles</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="registrar_roles.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Nombre:</label>
                                        <input type="text" name="nombre" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                    </div>
                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    