<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
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
                    <h4>Registrar Usuarios</h4>
                    </div>
                    <div class="card">
                        <div class="card-body">

                        <form action="operaciones/registrar_usuarios.php" method="post">
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
                                <label class="col-lg-2 col-md-2 col-sm-12" for=""></label>
                                <button type="submit" class="btn btn-primary ">Registrar</button>

                            </div>

                      
                      


                        </form>
                        </div>
                        
                    </div>










                    <div class="card">
                        <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">DNI:</label>
                                <input type="number"min="1" max="8"class="form-control col-lg-4 col-md-4 col-sm-12"  name="dni"placeholder="Ingrese su Dni ">

                            </div>



                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">Apellidos y Nombres</label>
                            <input type="text"min="1" max="8"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="a_n"placeholder="Ingrese su apellido y su nombre  ">

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Correo:</label>
                                <input type="email"min="1" max="8"class="form-control col-lg-10 col-md-10 col-sm-12"  name="dni"placeholder="Ingrese su Correo">

                            </div>


                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Telefono :</label>
                                <input type="number"min="1" max="8"class="form-control col-lg-4 col-md-4 col-sm-12"  name="dni"placeholder="Ingrese su Telefono ">

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion:</label>
                                <input type="number"min="1" max="8"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="dni"placeholder="Ingrese su Direccion">

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Fecha de Nacimiento:</label>
                                <input type="date"min="1" max="8"class="form-control col-lg-4 col-md-4 col-sm-12"  name="dni"placeholder="Ingrese su Fecha de Nacimiento ">

                            </div>


                          



                      
                      


                        </form>
                        </div>
                        
                    </div>














                </div>

            </div>


        </div>

    </div>


</div>







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