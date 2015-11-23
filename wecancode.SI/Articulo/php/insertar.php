<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wecancode/wecancode.FACADE/Articulo.php';
$articulo = new Articulo();
$codigo = $_POST['codigo'];
$lote = $_POST['lote'];
$descripcion_publicar = $_POST['descripcion_publicar'];
$descripcion_corta = $_POST['descripcion_corta'];
$product_number = $_POST['product_number'];
$link = $_POST['link'];
$link_facebook = $_POST['link_facebook'];
$link_instagram = $_POST['link_instagram'];
$link_mercadolibre = $_POST['link_mercadolibre'];
$promocion = $_POST['promocion'];
$observacion = $_POST['observacion'];

$salida = $articulo->insertar($codigo, $lote, $descripcion_publicar, $descripcion_corta, $product_number, $link, $link_facebook, $link_instagram, $link_mercadolibre, $promocion, $observacion);
if ($salida > 0) {
    echo 'El articulo <b>' . $codigo . ' ' . $descripcion_corta . '</b> se ha registrado satisfactoriamente';
} else {
    echo 'Ha ocurrido un error al registrar el artículo<br>' . $salida;
}



