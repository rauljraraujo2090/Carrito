
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

require('conexion.php');


?>




<table id="basic-datatable" class="table dt-responsive nowrap">
  <thead>
    <tr>
     <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Dni</th>
      <th scope="col">Apellidos_Nombres</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Rol</th>
      <th scope="col">Imagen</th>
      <th scope="col">Accion</th>
    </tr>
  

  </thead>
  <tbody>
  <?php
$consulta="select *from usuario ";
$ejecutar=mysqli_query($conn,$consulta);
$cont=0;

while($respuesta=mysqli_fetch_array($ejecutar)){
    $cont++;
   
echo"<tr>";
echo"<td>".$cont."</td>";
echo"<td>".$respuesta['id']."</td>";
echo"<td>".$respuesta['dni']."</td>";
echo"<td>".$respuesta['apellidos_nombres']."</td>";
echo"<td>".$respuesta['correo']."</td>";
echo"<td>".$respuesta['telefono']."</td>";
echo"<td>".$respuesta['direccion']."</td>";
echo"<td>".$respuesta['id_rol']."</td>";
echo"<td>".$respuesta['foto']."</td>";

echo"<td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td>";





echo"</tr>";


    

}



?>
  </tbody>
</table>







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