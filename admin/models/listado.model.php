<?php
require "Conexion.php";

class Listado
{
    private $con;
	function __construct()
	{
		$this->con = new Conexion();
		return $this->con;
	}

	function AllImages()
    {
	    $sql = "SELECT id_imagenes AS id,titulo,ruta,descripcion,anio,fuente,ruta_miniatura AS mini,parrafo FROM imagenes;";
		$res = $this->con->ConsultaCon($sql);
        return $res;
    }
}
