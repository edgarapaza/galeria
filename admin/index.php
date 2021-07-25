<!DOCTYPE html>
<html lang="es">
<head>
    <title>Images - ADMIN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@1&family=Otomanopee+One&display=swap" rel="stylesheet"> 

</head>
<body>
    <div class="container">
        <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="about">
                         <h3>INGRESO DE IMAGENES</h3>
                    </div>
               </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <form action="controller/guardar_img.controller.php" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="txttitulo" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txttitulo" id="txttitulo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtdescripcion" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtdescripcion" id="txtdescripcion">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtanio" class="col-sm-2 col-form-label">Año</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="txtanio" id="txtanio" placeholder="Solo Año o Fecha completa">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtfuente" class="col-sm-2 col-form-label">Fuente</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtfuente" id="txtfuente" value="Archivo Regional Puno - Archivo Historico">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtparrafo" class="col-sm-2 col-form-label">Resumen Detallada de la Imagen</label>
                    <div class="col-sm-10">
                        <textarea name="txtparrafo" id="txtparrafo" cols="100" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="archivo" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" name="archivo" id="archivo" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="archivo" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" name="btnSubir" id="btnSubir" class="btn btn-success btn-lg">Subir imagen</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
        

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
