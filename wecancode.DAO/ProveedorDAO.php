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

class ProveedorDAO {

    public function insertar($id, $nombre, $direccion, $telefono, $celular, $observaciones) {
        return base_de_datos::actualizar("INSERT INTO proveedor("
                        . "id, "
                        . "nombre, "
                        . "direccion, "
                        . "telefono, "
                        . "celular, "
                        . "observaciones) VALUES ("
                        . "'$id', "
                        . "'$nombre', "
                        . "'$direccion'," 
                        . "'$telefono', "
                        . "'$celular', "
                        . "'$observaciones');");
    }

    public function actualizar($id, $nombre, $direccion, $telefono, $celular, $observaciones) {
        return base_de_datos::actualizar("UPDATE proveedor SET id='$id',"
                        . "nombre='$nombre',"
                        . "direccion='$direccion',"
                        . "telefono='$telefono',"
                        . "celular='$celular',"
                        . "observaciones='$observaciones',"
                        . "WHERE id='$id'");
    }

    public function consultar() {
        return base_de_datos::consultar("SELECT id, nombre, direccion, telefono, celular, observaciones FROM proveedor ORDER BY id");
    }

    public function eliminar($id) {
        return base_de_datos::actualizar("DELETE FROM proveedor WHERE id='$id' ");
    }
/*
    public function consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo) {
        return base_de_datos::consultar("SELECT  * FROM administrativo WHERE tipo_doc_administrativo='$tipo_doc_administrativo' AND numero_doc_administrativo='$numero_doc_administrativo' ");
    }
*/
}
