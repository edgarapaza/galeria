<?php
require "admin/models/listado.model.php";

$listado = new Listado();
$data = $listado->AllImages();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>GALERIA - Archivo Regional de Puno</title>
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
    <style>
        #imagenes {
            border: 2px solid #3c3c3c;
            width: 100%;
            height: 500px;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }
        
        #imagenes img {
            width: 100%;
            max-height: 500px;
        }
        
        #descripcion {
            border: 1px solid black;
            padding-left: 10px;
            width: 100%;
            height: 500px;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }
    </style>
</head>

<body>
    <!-- PRE LOADER -->
    <div class="preloader">
         <div class="spinner">
              <span class="sk-inner-circle"></span>
         </div>
    </div>

    <section id="project" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-2">
                    <center>
                        <h1>GALERIA DE IMAGENES</h1>
                        
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Titulo: Reunion de amigas</h3>
                </div>
                <div class="col-md-4">
                    <h3>Año: 1689</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div id="imagenes">
                        <img src="images/project-image1.jpg" alt="imagen1">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="descripcion">
                        <h1>Titulo: Testamento Edgar Mendoza</h1>
                        <h4><em>Correspondiente al año 1598</em></h4>
                        <HR>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem incidunt, perferendis delectus fugiat accusamus rerum vero excepturi? Inventore nemo animi dignissimos dolorum repellendus soluta qui cupiditate, reiciendis, cum doloribus
                            unde.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Fuente: Archivo Historico - Archivo Regional de Puno</h4>
            </div>
        </div>
    </section>
    <!-- GALERIA DE IMAGENES -->
    <section id="team" class="parallax-section">
        <div class="container">
            <div class="row">

                <?php
                while($row = $data->fetch_array(MYSQLI_ASSOC)){    
                ?>
                <div id="owl-team" class="owl-carousel1">
                    <div class="col-md-4 col-sm-4 item">
                        <div class="team-item">
                                <img src="<?php echo $row['mini'];?>" class="img-responsive" alt="Foto">
                        </div>
                        <p><?php echo $row['titulo'];?></p>
                        <h3><?php echo $row['anio'];?></h3>
                    </div>
                </div>
                <?php }?>
                
               
            </div>
        </div>
    </section>

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