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
                    <h4>Registrar Nueva Venta </h4>
                    </div>
                 
                    <div class="card">
                        <!---<div class="card-body">

                        
                        </div>--->
                        
                    </div>

                    <a href="ventas.php " class="btn btn-success">Lista de Ventas </a>







                    <div class="card">
                        <div class="card-body">

                        















                        
                        <br>
                        <br>
                        <br>
       
                        <form action="registrar_ventas.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Serie de Venta: </label>
                                        <input type="number" name="serie_v" class="form-control col-lg-4 col-md-4 col-sm-12" placefolder="solo 5 digitos"required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Numero de Venta: </label>
                                        <input type="number" name="num_venta" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>                                   
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Fecha hora de venta:</label>
                                        <input type="date" name="fecha_h_ven" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Monto total:</label>
                                        <input type="number" name="monto_to" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >id_cliente:</label>
                                        <select name="id_cliente" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option></option>
                                            <?php
                                            $b_cliente = "SELECT * FROM cliente";
                                            $r_b_roles = mysqli_query($conn, $b_cliente);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['razon_social'];?></option>
                                            <?php }?>                                         
                                        </select>
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
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </form>
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