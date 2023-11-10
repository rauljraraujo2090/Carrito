 
 
 
 
 <!-- Large modal -->
 <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar_usuario">+Nuevo</button>

<div class="modal fade registrar_usuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Categorias</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="registrar_categorias.php" method="post">
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Nombre de la Categoria:</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="categoria" autocomplete="off"placeholder="Nombre de la categoria  " required >

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for=""></label>
                                <button type="submit" class="btn btn-primary ">Registrar</button>

                            </div>

                      
                      


                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    