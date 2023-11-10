<?php
    require('conexion.php');
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
                    <h4>Detalles de Venta</h4>
                    </div>
                    <div class="card">
                        <div class="card-body">

                        <form action="registrar_usuarios.php" method="post">
                       


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Descuentos</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder=" "required>

                            </div>

                                    <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Importe</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder=" "required>

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











                        
                        <br>
                        <br>
                        <br>
                        <table class="table" id="userstable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Dni</th>
      <th scope="col">Apellidos_Nombres</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Nacimiento</th>
      <th scope="col">Accion</th>
    </tr>
  

  </thead>
  <tbody>


    <?php
    $sql=$conn->query("Select*from usuario");
    while($raul=$sql->fetch_object()){?>
<tr>
      <th scope="row"><?=$raul->id ?></th>
      <td><?=$raul->dni ?></td>
      <td><?=$raul->apellidos_nombres ?></td>
      <td><?=$raul->correo ?></td>
      <td><?=$raul->telefono ?></td>
      <td><?=$raul->direccion ?></td>
      <td><?=$raul->fecha_nacimiento ?></td>
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