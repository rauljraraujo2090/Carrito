 
 
 
 
 <!-- Large modal -->
 <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar_ventas">+Nuevo</button>

<div class="modal fade registrar_ventas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Registrar Ventas</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                <form action="registrar_ventas.php" method="post" >
                          

                        <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Serie venta</label>
                            <input type="number"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="serie"placeholder=" "required>

                            </div>


                                  <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Numero venta</label>
                            <input type="number"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="n_venta"required>

                            </div>


                                  <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">fecha_hora_venta</label>
                            <input type="date"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="f_venta"placeholder="  "required>

                            </div>



                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Monto total</label>
                            <input type="number"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="monto"placeholder=" "required>

                            </div>







                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Id_Cliente</label>
                                
                             <select name="id_cli" class="form-control col-lg-4 col-md-4 col-sm-12" id="" >
                           <optio value=""></optio>
                             <?php
                             $consulta_cliente="SELECT*FROM cliente";
                             $ejecutar= mysqli_query($conn, $consulta_cliente);
                             while($datos_cliente=mysqli_fetch_array($ejecutar)){?>
                            


                              <option value="<?php echo  $datos_cliente['id'];?>"><?php  echo $datos_cliente['razon_social'];?></option>
                          
                             
                             
                            
                             <?php }?>
                            
                             </select>
                            </div>















                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Id_Usuario</label>
                                
                             <select name="id_usu" class="form-control col-lg-4 col-md-4 col-sm-12" id="" >
                           <optio value=""></optio>
                             <?php
                             $consulta_usu="SELECT*FROM usuario";
                             $ejecutar= mysqli_query($conn, $consulta_usu);
                             while($datos_usu=mysqli_fetch_array($ejecutar)){?>
                            


                              <option value="<?php echo  $datos_usu['id'];?>"><?php  echo $datos_usu['apellidos_nombres'];?></option>
                          
                             
                             
                            
                             <?php }?>
                            
                             </select>
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


                                    