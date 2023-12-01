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

    <style>
        .cantidad{
            width:3em;


        }
.head{

    background-color: #2ac14e;
    color:white;
}

.total{
    color:#2ac14e;


}
.valor{
    color:#2ac14e;


}


    </style>
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
                    <h4>Registrar Nueva Venta </h4>
                    </div>
                 
                    <div class="card">
                        <!---<div class="card-body">

                        
                        </div>--->
                        
                    </div>

                    <a href="ventas.php " class="btn btn-success">Lista de Ventas </a>
                    <br>
                    <br>







                    <div class="card">
                        <div class="card-body">




                        <div class="row ">

<!--FORMULARIO  VENTA-->
                            <div class="col-lg-6 col-md-6 col-sm-12">


                            <form action="registrar_ventas.php" method="POST">
                                    <div class="form-group row">
                                        <label  class="col-lg-2 col-md-2 col-sm-12"for="">DNI:</label>
                                            <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" require placefolder="dni cliente "> 
                                            <button class="btn btn-info col-lg-2 col-md-2 col-sm-4">Buscar</button>


                                    </div>



                                    <div class="form-group row">
                                        <label  class="col-lg-2 col-md-2 col-sm-12"for="">Apellidos y Nombres:</label>
                                            <input type="text" id="nombres" class="form-control col-lg-8 col-md-8 col-sm-12" readonly> 
                                           

                                    </div>


                            




                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >id_usuario:</label>
                                        <select name="id_usuario" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option></option>
                                            <?php
                                            $b_roles = "SELECT * FROM usuario";
                                            $r_b_roles = mysqli_query($conn, $b_roles);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['apellidos_nombres'];?></option>
                                            <?php }?>                                         
                                        </select>
                                    </div>  





                                    <div class="form-group row">
                                        <label  class="col-lg-2 col-md-2 col-sm-12"for="">producto:</label>
                                            <input type="text" name="producto" class="form-control col-lg-4 col-md-4 col-sm-12" require placefolder="Codigo Producto "> 
                                            <button class="btn btn-info col-lg-2 col-md-2 col-sm-4">Buscar Producto</button>


                                    </div>




                                    <div class="form-group row">
                                        <label  class="col-lg-2 col-md-2 col-sm-12"for="">Fecha Hora</label>
                                        <label  class="form-control col-lg-4 col-md-4 col-sm-12"for="">
                                            
                                        <?php date_default_timezone_set('America/Lima'); echo date('d-m-Y h:i:s ');?></label>
                                          


                                    </div>




           
                                </form>


                            </div>




<!--FORMULARIO DETALLE VENTA-->

                            <div class="col-lg-6 col-md-6 col-sm-12">


                            <table id="basic-datatable" class="table  dt-responsive nowrap mb-0">
  <thead>
    <tr class="head">
        <th colspan="6" class="text-center">Productos</th>
    </tr>
    <tr>
      <th width="5%">#</th>
      <th width="60%">Descripcion</th>
      <th width="10%">Cantidad</th>
      <th width="10%">P.Unitario</th>
      <th width="10%">Importe</th>
      <th width="5%">Acciones</th>
      
      
    
      
    </tr>
  

  </thead>
  <tbody>

  <tr>
    <td>1</td>
    <td>nombre producto</td>
    <td><input  class="cantidad" type="number"value="1" ></td>
    <td class="valor">S/ 50.00</td>
    <td class="valor">S/ 100.00</td>
    <td><button onclick="eliminar()"type="submit" class="btn btn-danger">X</button></td>
  </tr>
  <tr>
    <td  colspan="4" class=" text-center">TOTAL</td>
    <td class="valor">S/ 100.00</td>
  </tr>

  
  </tbody>
</table>
<!-- table -->

                            </div>

                        















                        
                        <br>
                        <br>
                        <br>
       
                        

                                </div>









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

<!----MODAL ALERT--->

<script src="eliminar.js">

</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>