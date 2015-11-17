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

class FacturaDAO {

    public function insertar($numero_factura, $id_cliente, $fecha_factura, $total_factura, $valor_flete) {
        return base_de_datos::actualizar("INSERT INTO factura("
                        . "numero_factura, "
                        . "id_cliente, "
                        . "fecha_factura, "
                        . "total_factura, "
                        . "valor_flete) VALUES ("
                        . "'$numero_factura', "
                        . "'$id_cliente', "
                        . "'$fecha_factura'," 
                        . "'$total_factura', "
                        . "'$valor_flete'); ");
    }

    public function actualizar($numero_factura, $id_cliente, $fecha_factura, $total_factura, $valor_flete){
        return base_de_datos::actualizar("UPDATE factura SET numero_factura='$numero_factura',"
                        . "id_cliente='$id_cliente',"
                        . "fecha_factura='$fecha_factura',"
                        . "total_factura='$total_factura',"
                        . "valor_flete='$valor_flete',"
                        . "WHERE numero_factura='$numero_factura'");
    }

    public function consultar() {
        return base_de_datos::consultar("SELECT numero_factura, id_cliente, fecha_factura, total_factura, valor_flete FROM factura ORDER BY numero_factura");
    }
/*
    public function eliminar($numero_factura) {
        return base_de_datos::actualizar("DELETE FROM factura WHERE numero_factura='$numero_factura' ");
    }
/*
    public function consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo) {
        return base_de_datos::consultar("SELECT  * FROM administrativo WHERE tipo_doc_administrativo='$tipo_doc_administrativo' AND numero_doc_administrativo='$numero_doc_administrativo' ");
    }
*/
}
