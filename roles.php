<?php
    require('conexion.php');
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />


<!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    

    
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
                      include("include/modal_frm_reg_roles.php");
                      ?>

                   
                   <!---- <h4>Registrar Usuarios</h4>--->
                    </div>
                    <!---
                    <div class="card">
                        <div class="card-body">

                        <form action="registrar_usuarios.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">DNI:</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="dni" autocomplete="off"placeholder="Ingrese su Dni " required >

                            </div>



                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Apellidos y Nombres</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="a_n"placeholder="Ingrese su apellido y su nombre  "required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Correo:</label>
                                <input type="email"class="form-control col-lg-10 col-md-10 col-sm-12"  name="correo"placeholder="Ingrese su Correo"required>

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Telefono :</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="telefono"placeholder="Ingrese su Telefono "required>

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion:</label>
                                <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="direccion"placeholder="Ingrese su Direccion"required>

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Fecha de Nacimiento:</label>
                                <input type="date"class="form-control col-lg-4 col-md-4 col-sm-12"  name="nacimiento"placeholder="Ingrese su Fecha de Nacimiento "required>

                            </div>
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Foto</label>
                                <input type="file"class="form-control col-lg-4 col-md-4 col-sm-12" accept="image/*"  name="img"placeholder="Ingrese su Fecha de Nacimiento "required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Rol</label>
                                
                             <select name="rol" class="form-control col-lg-4 col-md-4 col-sm-12" id="" type="file">
                         
                             </select
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

                        


                        
                       
    
<?php

require('conexion.php');


?>




<table id="basic-datatable" class="table dt-responsive nowrap">
  <thead>
    <tr>
     <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      
      <th scope="col">Accion</th>
    </tr>
  

  </thead>
  <tbody>
  <?php
$consulta="select *from roles ";
$ejecutar=mysqli_query($conn,$consulta);
$cont=0;

while($respuesta=mysqli_fetch_array($ejecutar)){
    $cont++;
   
echo"<tr>";
echo"<td>".$cont."</td>";
echo"<td>".$respuesta['id']."</td>";
echo"<td>".$respuesta['nombre']."</td>";


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












    <!-- jQuery  -->
    <script src="plantilla/Admin/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/assets/js/waves.js"></script>
    <script src="plantilla/Admin/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>
    
    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>