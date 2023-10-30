<?php
    require('conexion.php');
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    
    <link rel="shortcut icon" href="carrito.png">
</head>

<body>
    <?php
    require('include/header.php');
    ?>
     
     <!---INICIO DE CONTENIDO--->
<div class="main-content">


   <div class="page-content">
       <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                    <h4>Registrar Productos</h4>
                    </div>
                    <div class="card">
                        <div class="card-body">

                        <form action="registrar_productos.php" method="post">
                          


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
                                    <option>1</option>
                                     <option>0</option>
                                      
  
                                      
                                    </select>
                                 </div>



                                 <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Estado</label>
                               
                                    <select name="estado" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Estado </option>
                                    <option>activo</option>
                                    <option>agotado</option>
                                       
  
                                      
                                    </select>
                                 </div>



                          


                                 <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Imagen</label>
                                <input type="file"class="form-control col-lg-4 col-md-4 col-sm-12" accept="image/*"  name="img"placeholder="Ingrese su Fecha de Nacimiento "required>

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










                    <div class="card">
                        <div class="card-body">

                        






                        <!-- Modal -->
<div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">editar datos del Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action="" method="post">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Codigo</label>
            <input type="number" name="dni"class="form-control" id="exampleInputEmail1" value=""aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos_Nombres</label>
            <input type="text" name="a_n"class="form-control" id="exampleInputEmail1" value=""aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">correo</label>
            <input type="email"  name="correo"class="form-control" value=""id="exampleInputPassword1">
          </div>
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">telefono</label>
            <input type="text"  name="telefono"class="form-control" value=""id="exampleInputPassword1">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Direccion</label>
            <input type="text"  name="direccion"class="form-control" value=""id="exampleInputPassword1">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha_Nacimiento</label>
            <input type="date"  name="nacimiento"class="form-control" value=""id="exampleInputPassword1">
          </div>
          
          <button type="submit" class="btn btn-primary">editar</button>
        </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Save </button>
      </div>
    </div>
  </div>
</div>











                        
                        <br>
                        <br>
                        <br>
                        <table class="table" id="userstable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Codigo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Detalle</th>
      <th scope="col">id_Categoria</th>
      <th scope="col">P_Compra</th>
      <th scope="col">P_Venta</th>
      <th scope="col">Stock</th>
      <th scope="col">estado</th>
      <th scope="col">Imagen</th>
      <th scope="col">id_Proveedor</th>
      <th scope="col">Accion</th>
    </tr>
  

  </thead>
  <tbody>


    <?php
    $sql=$conn->query("Select*from producto");
    while($raul=$sql->fetch_object()){?>
<tr>
      <th scope="row"><?=$raul->id ?></th>
      <td><?=$raul->codigo ?></td>
      <td><?=$raul->descripcion ?></td>
      <td><?=$raul->detalle ?></td>
      <td><?=$raul->id_categoria ?></td>
      <td><?=$raul->precio_compra ?></td>
      <td><?=$raul->precio_venta ?></td>

      <td><?=$raul->stock ?></td>
      <td><?=$raul->estado ?></td>
      <td><?=$raul->imagen ?></td>
      <td><?=$raul->id_proveedor ?></td>
    <td>
    
        <a href="actualizar.php" type="button" data-bs-toggle="modal" data-bs-target="#modaleditar" class="btn btn-success"><i class="fa-solid- fa-pen-to-square">Editar</i></a>
        <a href="eliminar_usuarios.php" type="button" class="btn btn-danger"><i class="fa-solid- fa-pen-to-square">Eliminar</i></a>
       
      </td>
    </tr>


   <?php }



    ?>

   
  </tbody>
</table>
<!-- table -->
                        </div>
                        
                    </div>














                </div>

            </div>


        </div>

    </div>


</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

     <!---FIN DE CONTENIDO-->
    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>