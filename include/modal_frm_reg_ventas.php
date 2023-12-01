<button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>

                <div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="myLargeModalLabel">Nuevo venta</h5>
                                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="registrar_ventas.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Serie de Venta: </label>
                                        <input type="number" name="serie_v" class="form-control col-lg-4 col-md-4 col-sm-12" placefolder="solo 5 digitos"required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Numero de Venta: </label>
                                        <input type="number" name="num_venta" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>                                   
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Fecha hora de venta:</label>
                                        <input type="date" name="fecha_h_ven" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Monto total:</label>
                                        <input type="number" name="monto_to" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >id_cliente:</label>
                                        <select name="id_cliente" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option></option>
                                            <?php
                                            $b_cliente = "SELECT * FROM cliente";
                                            $r_b_roles = mysqli_query($conn, $b_cliente);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['razon_social'];?></option>
                                            <?php }?>                                         
                                        </select>
                                    </div>  
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >id_usuario:</label>
                                        <select name="id_usuario" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option></option>
                                            <?php
                                            $b_roles = "SELECT * FROM usuario";
                                            $r_b_roles = mysqli_query($conn, $b_roles);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['apellidos_nombres'];?></option>
                                            <?php }?>                                         
                                        </select>
                                    </div>  
                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>