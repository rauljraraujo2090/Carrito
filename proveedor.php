<?php
    include('conexion.php');
    
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
                      include("include/modal_frm_reg_proveedores.php");
                      ?>
                   <!--- <h4>Registrar Proveedores</h4>-->
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










                        


<table id="basic-datatable" class="table dt-responsive nowrap">
  <thead>
    <tr>
     <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">Ruc</th>
      <th scope="col">Razon Social</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Methodo de Pago</th>
   
      <th scope="col">Accion</th>
    </tr>
  

  </thead>
  <tbody>
  <?php
$consulta="select *from proveedor ";
$ejecutar=mysqli_query($conn,$consulta);
$cont=0;

while($respuesta=mysqli_fetch_array($ejecutar)){
    $cont++;
   
echo"<tr>";
echo"<td>".$cont."</td>";
echo"<td>".$respuesta['id']."</td>";
echo"<td>".$respuesta['ruc']."</td>";
echo"<td>".$respuesta['razon_social']."</td>";
echo"<td>".$respuesta['correo']."</td>";
echo"<td>".$respuesta['telefono']."</td>";
echo"<td>".$respuesta['direccion']."</td>";
echo"<td>".$respuesta['metodo_pago']."</td>";


echo"<td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td>";





echo"</tr>";


    

}



?>
  </tbody>
</table>

<!-- table -->


                        
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