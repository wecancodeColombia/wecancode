<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/wecancode/wecancode.UTIL/base_de_datos.php';

//$codigo='AAA'; $lote='A'; $descripcion='HOJA'; $product_number='IIIII'; $link='RRWWW';

//$prueba=new ArticuloDAO();
//echo $prueba->insertar($codigo, $lote, $descripcion_publicar, $descripcion_corta, $product_number, $link);

class ProveedorArticuloDAO {

    public function insertar($id_proveedor, $codigo_articulo, $lote_articulo, $fecha_compra) {
        return base_de_datos::actualizar("INSERT INTO proveedor_articulo("
                        . "id_proveedor, "
                        . "codigo_articulo, "
                        . "lote_articulo, "
                        . "fecha_compra) VALUES ("
                        . "'$id_proveedor', "
                        . "'$codigo_articulo', "
                        . "'$lote_articulo'," 
                        . "'$fecha_compra');");
    }

    public function actualizar($id_proveedor, $codigo_articulo, $lote_articulo, $fecha_compra) {
        return base_de_datos::actualizar("UPDATE proveedor_articulo SET id_proveedor='$id_proveedor',"
                        . "codigo_articulo='$codigo_articulo',"
                        . "lote_articulo='$lote_articulo',"
                        . "fecha_compra='$fecha_compra',"
                        . "WHERE id_proveedor='$id_proveedor' AND codigo_articulo='$codigo_articulo' AND lote_articulo='$lote_articulo'");
    }

    public function consultar() {
        return base_de_datos::consultar("SELECT id_proveedor, codigo_articulo, lote_articulo, fecha_compra FROM proveedor_articulo ORDER BY fecha_compra, id_proveedor");
    }

    public function eliminar($id_proveedor, $codigo_articulo, $lote_articulo) {
        return base_de_datos::actualizar("DELETE FROM proveedor_articulo WHERE id_proveedor='$id_proveedor' AND codigo_articulo='$codigo_articulo' AND lote_articulo='$lote_articulo'");
    }
/*
    public function consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo) {
        return base_de_datos::consultar("SELECT  * FROM administrativo WHERE tipo_doc_administrativo='$tipo_doc_administrativo' AND numero_doc_administrativo='$numero_doc_administrativo' ");
    }
*/
}
