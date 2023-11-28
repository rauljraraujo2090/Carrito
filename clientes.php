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
                    <?php  
                      include("include/modal_frm_reg_clientes.php");
                      ?>
                   <!--- <h4>Registrar Clientes</h4>-->
                    </div>
                    <!----
                    <div class="card">
                        <div class="card-body">

                        <form action="registrar_clientes.php" method="post">


                        <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">ruc_dni :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="ruc"placeholder="Ingrese el Telefono "required>

                            </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Razon Social</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="nombre"placeholder="Ingrese  nombre  "required>

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



                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion de Envio</label>
                                <input type="text"class="form-control col-lg-4 col-md-4 col-sm-12"  name="envio"placeholder="Ingrese el Direccion de envio "required>

                            </div>


                    

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for=""></label>
                                <button type="submit" class="btn btn-primary ">Registrar</button>

                            </div>

                      
                      


                        </form>
                        </div>
                        
                    </div>

---->







                    <div class="card">
                        <div class="card-body">

                        














<br>
<br>
<br>
<table id="basic-datatable" class="table dt-responsive nowrap">
  <thead>
    <tr>
     <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Ruc_Dni</th>
      <th scope="col">Razon Social</th>
      <th scope="col">Telefono/th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Direccion de envio</th>
  
      <th scope="col">Accion</th>
    </tr>
  

  </thead>
  <tbody>
  <?php
$consulta="select *from cliente ";
$ejecutar=mysqli_query($conn,$consulta);
$cont=0;

while($respuesta=mysqli_fetch_array($ejecutar)){
    $cont++;
   
echo"<tr>";
echo"<td>".$cont."</td>";
echo"<td>".$respuesta['id']."</td>";
echo"<td>".$respuesta['ruc_dni']."</td>";
echo"<td>".$respuesta['razon_social']."</td>";
echo"<td>".$respuesta['telefono']."</td>";
echo"<td>".$respuesta['correo']."</td>";
echo"<td>".$respuesta['direccion']."</td>";
echo"<td>".$respuesta['direccion_envio']."</td>";


echo"<td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td>";





echo"</tr>";


    

}



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