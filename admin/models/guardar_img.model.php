<?php
require "Conexion.php";

class SaveImages
{
	private $con;
	function __construct()
	{
		$this->con = new Conexion();
		return $this->con;
	}

	function GuardarImagenes($titulo,$ruta,$descripcion,$anio,$fuente,$ruta_miniatura,$parrafo)
    {
		$fecha = date('Y-m-d H:i:s');
	    $sql = "INSERT INTO imagenes VALUES (NULL,'$titulo','$ruta','$descripcion','$anio','$fuente','$ruta_miniatura','$parrafo','$fecha');";
		$res = $this->con->ConsultaSin($sql);
		return $res;
    }
}
