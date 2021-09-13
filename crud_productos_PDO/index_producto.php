<?php

require "ControllerProducto.php";

$con = new ControllerProducto();
$LISTADO = $con->Listar();

var_dump($LISTADO);
?>