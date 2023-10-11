<?php
    require('conexion.php');
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proveedores</title>
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
                    <h4>Registrar Proveedores</h4>
                    </div>
                    <div class="card">
                        <div class="card-body">

                        <form action="registrar_usuarios.php" method="post">
                            



                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Razon Social</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="a_n"placeholder="Ingrese  nombre  "required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Correo:</label>
                                <input type="email"class="form-control col-lg-10 col-md-10 col-sm-12"  name="correo"placeholder="Ingrese el Correo"required>

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Telefono :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder="Ingrese el Telefono "required>

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion:</label>
                                <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="direccion"placeholder="Ingrese la Direccion"required>

                            </div>



                            <!---
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Metodo de Pago</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="nacimiento"placeholder="Metodo de Pago "required>

                            </div>


                    --->


                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">Metodo de Pago</label>
                               
                                    <select name="stock" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Metodo  </option>
                                    <option>yape</option>
                                     <option>Plin</option>
                                     <option>Interbanck</option>
                                      
  
                                      
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
            <label for="exampleInputEmail1" class="form-label">Dni</label>
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