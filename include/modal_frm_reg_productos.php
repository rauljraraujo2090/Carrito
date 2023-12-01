 
 
 
 
 <!-- Large modal -->
 <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar_usuario">+Nuevo</button>

<div class="modal fade registrar_usuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Productos</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="registrar_productos.php" method="post"enctype="multipart/form-data">
                          


                        <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Codigo</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="codigo"placeholder="Ingrese  el precio venta "required>

                            </div>






                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Descripcion</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="descripcion"placeholder="Ingrese la descripcion  "required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Detalle</label>
                                <input type="text"class="form-control col-lg-10 col-md-10 col-sm-12"  name="detalles"placeholder="Ingrese el detalle"required>

                            </div>









                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">id_Categoria</label>
                                
                             <select name="categoria" class="form-control col-lg-4 col-md-4 col-sm-12" id="" type="file">
                           <optio value=""></optio>
                             <?php
                             $consulta_categoria="SELECT*FROM categoria";
                             $ejecutar= mysqli_query($conn, $consulta_categoria);
                             while($datos_categoria=mysqli_fetch_array($ejecutar)){?>
                            


                              <option value="<?php echo  $datos_categoria['id'];?>"><?php  echo $datos_categoria['nombre'];?></option>
                          
                     
                             <?php }?>
                            
                             </select>
                            </div>






                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Precio compra</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="precio_compra"placeholder="Ingrese  el precio venta "required>

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Precio Venta</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="precio_venta"placeholder="Ingrese  el precio venta "required>

                            </div>



<!----
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Stock</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder="Ingrese su Telefono "required>

                            </div>





                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Estado</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder="Ingrese su Telefono "required>

                            </div>
---->


                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Stock</label>
                               
                                    <select name="stock" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Estock </option>
                                    <option>activo</option>
                                     <option>0</option>
                                      
  
                                      
                                    </select>
                                 </div>



                                 <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Estado</label>
                               
                                    <select name="estado" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Estado </option>
                                    <option>1</option>
                                    <option>2</option>
                                       
  
                                      
                                    </select>
                                 </div>



                          


                                 <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Imagen</label>
                                <input type="file"class="form-control col-lg-4 col-md-4 col-sm-12" accept="image/*"  name="img"   placeholder="Ingrese su Fecha de Nacimiento "required>

                            </div>







                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">id_Proveedor</label>
                                
                             <select name="proveedor" class="form-control col-lg-4 col-md-4 col-sm-12" id="" type="file">
                           <optio value=""></optio>
                             <?php
                             $consulta_proveedor="SELECT*FROM proveedor";
                             $ejecutar= mysqli_query($conn, $consulta_proveedor);
                             while($datos_proveedor=mysqli_fetch_array($ejecutar)){?>
                            


                              <option value="<?php echo  $datos_proveedor['id'];?>"><?php  echo $datos_proveedor['razon_social'];?></option>
                          
                     
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


                                    