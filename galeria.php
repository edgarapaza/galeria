<?php
require "admin/models/listado.model.php";

$listado = new Listado();
$data = $listado->AllImages();
$id = $_GET['id'];
if($id == "")
{
    $id = 1;
    $imag = $listado->ImagesCod($id);
}else{
    $imag = $listado->ImagesCod($id);
}

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
    <!-- 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@1&family=Otomanopee+One&display=swap" rel="stylesheet">
    <style>
        #imagenes {
            border: 2px solid #3c3c3c;
            background-color: black;
            width: 100%;
            height: 500px;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
        }

        #imagenes img {
            
            max-height: 500px;
        }

        #descripcion {
            border: 1px solid black;
            padding: 10px;
            width: 100%;
            height: 500px;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        }
    </style>
    
    <script>
        var current = 0;
        var imagenes = new Array();

        $(document).ready(function() {
            var numImages = 6;
            if (numImages <= 3) {
                $('.right-arrow').css('display', 'none');
                $('.left-arrow').css('display', 'none');
            }

            $('.left-arrow').on('click', function() {
                if (current > 0) {
                    current = current - 1;
                } else {
                    current = numImages - 3;
                }

                $(".carrusel").animate({
                    "left": -($('#product_' + current).position().left)
                }, 600);

                return false;
            });

            $('.left-arrow').on('hover', function() {
                $(this).css('opacity', '0.5');
            }, function() {
                $(this).css('opacity', '1');
            });

            $('.right-arrow').on('hover', function() {
                $(this).css('opacity', '0.5');
            }, function() {
                $(this).css('opacity', '1');
            });

            $('.right-arrow').on('click', function() {
                if (numImages > current + 3) {
                    current = current + 1;
                } else {
                    current = 0;
                }

                $(".carrusel").animate({
                    "left": -($('#product_' + current).position().left)
                }, 600);

                return false;
            });
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <center><h1>GALERIA DE IMAGENES</h1></center>
            </div>
        </div>
 
        <div class="row">
            <div class="col-md-6">
                <h3>Titulo: <?php echo $imag['titulo'];?></h3>
            </div>
            <div class="col-md-4">
                <h3>Año: <?php echo $imag['anio'];?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div id="imagenes">
                    <img src="<?php echo $imag['ruta'];?>" alt="imagen1">
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div id="descripcion">
                    <h1>Titulo: <?php echo $imag['titulo'];?></h1>
                    <h4><em><?php echo $imag['descripcion'];?></em></h4>
                    <HR>
                    <p><?php 
                    if($imag['parrafo'] ==""){
                        $mensaje = "Agradecemos de antemano su participación y colaboración con la 
                        <strong>identificación de las fotografías</strong> en exposición y con la donación de originales o copias de estos valiosos documentos, testimonio de nuestra historia. 
                        Su aporte será reconocido.";
                        echo $mensaje;
                    }else{
                        echo $imag['parrafo'];
                    }
                    ?></p>
                    <button type="button" class="btn btn-info">Indentificar las fotografias</button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <h4>Fuente: <?php echo $imag['fuente'];?></h4>
        </div>
        <!-- GALERIA DE IMAGENES -->
        <div class="row">
            <div id="content" class="col-lg-12">
                
                <h1>Galeria de Imagenes</h1>
                <div id="carrusel">
                    <a href="#" class="left-arrow"><img src="images/left-arrow.png" /></a>
                    <a href="#" class="right-arrow"><img src="images/right-arrow.png" /></a>
                    <div class="carrusel">
                        <?php
                        while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                        
                            <div class="product" onclick="Codigo(<?php echo $row['id']; ?>)" id="<?php echo $row['id']; ?>">
                            
                                <img src="<?php echo $row['mini']; ?>" width="195" height="100" />
                                <h5><?php echo $row['titulo']; ?></h5>
                                <p><?php echo $row['anio']; ?></p>
                            </div>
                            
                        <?php } ?>
                    </div>
                </div>
            </div>
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
<script type="text/javascript">
$(document).ready(function(){
    
});

function Codigo(id)
{       
    window.location.href = "galeria.php?id=" + id; 
}    

</script>