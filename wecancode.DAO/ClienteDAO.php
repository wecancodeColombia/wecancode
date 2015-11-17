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

class ClienteDAO {

    public function insertar($id_cliente, $nombre, $direccion, $telefono, $celular, $ciudad, $departamento, $email, $observaciones) {
        return base_de_datos::actualizar("INSERT INTO cliente("
                        . "id_cliente, "
                        . "nombre, "
                        . "direccion, "
                        . "telefono, "
                        . "celular, "
                        . "ciudad, "
                        . "departamento, "
                        . "email, "
                        . "observaciones) VALUES ("
                        . "'$id_cliente', "
                        . "'$nombre', "
                        . "'$direccion'," 
                        . "'$telefono', "
                        . "'$celular', "
                        . "'$ciudad', "
                        . "'$departamento', "
                        . "'$email', "
                        . "'$observaciones');");
    }

    public function actualizar($id_cliente, $nombre, $direccion, $telefono, $celular, $ciudad, $departamento, $email, $observaciones) {
        return base_de_datos::actualizar("UPDATE cliente SET id_cliente='$id_cliente',"
                        . "nombre='$nombre',"
                        . "direccion='$direccion',"
                        . "telefono='$telefono',"
                        . "celular='$celular',"
                        . "ciudad='$ciudad',"
                        . "departamento='$departamento',"
                        . "email='$email',"
                        . "observaciones='$observaciones',"
                        . "WHERE id_cliente='$id_cliente' ");
    }

    public function consultar() {
        return base_de_datos::consultar("SELECT id_cliente, nombre, direccion, telefono, celular, ciudad, departamento, email, observaciones");
    }

    public function eliminar($id_cliente) {
        return base_de_datos::actualizar("DELETE FROM cliente WHERE id_cliente='$id_cliente' ");
    }
/*
    public function consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo) {
        return base_de_datos::consultar("SELECT  * FROM administrativo WHERE tipo_doc_administrativo='$tipo_doc_administrativo' AND numero_doc_administrativo='$numero_doc_administrativo' ");
    }
*/
}
