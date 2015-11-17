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

class ArticuloDAO {

    public function insertar($codigo, $lote, $descripcion_publicar, $descripcion_corta, $product_number, $link) {
        return base_de_datos::actualizar("INSERT INTO articulo("
                        . "codigo, "
                        . "lote, "
                        . "descripcion_publicar, "
                        . "descripcion_corta, "
                        . "product_number, "
                        . "link) VALUES ("
                        . "'$codigo', "
                        . "'$lote', "
                        . "'$descripcion_publicar'," 
                        . "'$descripcion_corta', "
                        . "'$product_number', "
                        . "'$link');");
    }

    public function actualizar($codigo, $lote, $descripcion_publicar, $descripcion_corta, $product_number, $link) {
        return base_de_datos::actualizar("UPDATE articulo SET codigo='$codigo',"
                        . "lote='$lote',"
                        . "descripcion_publicar='$descripcion_publicar',"
                        . "descripcion_corta='$descripcion_corta',"
                        . "product_number='$product_number',"
                        . "link='$link',"
                        . "WHERE codigo='$codigo' AND lote='$lote' ");
    }

    public function consultar() {
        return base_de_datos::consultar("SELECT codigo, lote, descripcion_publicar, descripcion_corta, product_number, link FROM articulo ORDER BY codigo, lote");
    }

    public function eliminar($codigo, $lote) {
        return base_de_datos::actualizar("DELETE FROM articulo WHERE codigo='$codigo' AND lote='$lote' ");
    }
/*
    public function consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo) {
        return base_de_datos::consultar("SELECT  * FROM administrativo WHERE tipo_doc_administrativo='$tipo_doc_administrativo' AND numero_doc_administrativo='$numero_doc_administrativo' ");
    }
*/
}
