<?php
require_once "modelos/producto.php";
require_once "modelos/tipoProducto.php";



//Instancia Producto//
$p = new producto();
$p->Id = 1;
$p->Nombre="Merenguitas";
$p->Precio=1000;
$p->Stock= 10;
//Instancia TipoProducto//
$tp = new tipoProd();
$tp->Id = 2;
$tp->Descripcion = "Galletitas";
$p->TipoProd=$tp;


$p->mostrarDatos();
?>