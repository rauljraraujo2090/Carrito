 <?php

include('../conexion');
?>
 
 
 
 <!-- Large modal -->
 <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar_pedidos">+Nuevo</button>

<div class="modal fade registrar_pedidos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Pedidos</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="registrar_pedidos.php" method="post" >
                                                <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Id_Cliente</label>
                                
                             <select name="rol" class="form-control col-lg-4 col-md-4 col-sm-12" id="" type="file">
                           <optio value=""></optio>
                             <?php
                             $consulta_rol="SELECT*FROM cliente";
                             $ejecutar= mysqli_query($conn, $consulta_rol);
                             while($datos_roles=mysqli_fetch_array($ejecutar)){?>
                            


                              <option value="<?php echo  $datos_roles['id'];?>"><?php  echo $datos_roles['razon_social'];?></option>
                          
                             
                             
                            
                             <?php }?>
                            
                             </select>
                            </div>




                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Fecha_hora_pedido</label>
                            <input type="date"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="f_hora"required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Fecha de Entrega:</label>
                                <input type="date"class="form-control col-lg-10 col-md-10 col-sm-12"  name="fecha_e"required>

                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Metodo de Pago</label>
                               
                                    <select name="m_pago" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Metodo  </option>
                                    <option>yape</option>
                                     <option>Plin</option>
                                     <option>Interbanck</option>
                                      
  
                                      
                                    </select>
                                 </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">monto:</label>
                                <input type="number"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="monto"required>

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Comprobante:</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="comprobante"required>

                            </div>

                             <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Estado</label>
                               
                                    <select name="estado" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione el estado </option>
                                    <option>activo</option>
                                     <option>otros</option>
                                    
                                      
  
                                      
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


                                    