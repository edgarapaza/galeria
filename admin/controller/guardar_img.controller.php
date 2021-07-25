<?php
require "../models/guardar_img.model.php";

$titulo      = trim($_POST['txttitulo']);
$descripcion = trim($_POST['txtdescripcion']);
$anio        = trim(strtoupper($_POST['txtanio']));
$fuente      = trim($_POST['txtfuente']);
$parrafo     = trim($_POST['txtparrafo']);
$archivo     = $_FILES['archivo'];

$ruta = "img/" . $archivo['name'];
$ruta_miniatura = "img-thumbail/" . $archivo['name'];

/*
echo $archivo['name'];
echo $archivo['type'];
echo $archivo['tmp_name'];
echo $archivo['error'];
echo $archivo['size'];
*/

$save = new SaveImages();
$res = $save->GuardarImagenes($titulo,$ruta,$descripcion,$anio,$fuente,$ruta_miniatura,$parrafo);
echo $res;
if($res == 1){
    $msg = "Insertado correctamente";
    header("Location: ../index.php?msg=".$msg);
}else{
    $msg = "Hubo un error guardando datos";
    header("Location: ../index.php?msg=" . $msg);
}
