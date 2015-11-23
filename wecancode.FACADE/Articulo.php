<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wecancode/wecancode.UTIL/base_de_datos.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/wecancode/wecancode.DAO/ArticuloDAO.php';

//$facade =new Localidad();
//echo $facade->localidad_insertar('s', 's', 's');

class Articulo {

    public function insertar($codigo, $lote, $descripcion_publicar, $descripcion_corta, $product_number, $link, $link_facebook, $link_instagram, $link_mercadolibre, $promocion, $observacion) {
        $articulo = new ArticuloDAO();
        return $articulo->insertar($codigo, $lote, $descripcion_publicar, $descripcion_corta, $product_number, $link, $link_facebook, $link_instagram, $link_mercadolibre, $promocion, $observacion);
    }

    public function consultar() {
        $salida = '';
        $articulo = new ArticuloDAO();
        $lista = $articulo->consultar();
        $descuento = "";

        foreach ($lista as $row) {
            if ($row['promocion'] != 0) {
                $descuento = "Descuento del " . $row['promocion'] . '%';
            }
            $salida.=
                    '<div style=" height: 170px; width: 560px; margin-top: 10px;" class="mostrar_articulo">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">' . $row['codigo'] . '</div>
                            <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                                <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                                <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                            </div>
                        </div>
                        <div>
                            <div style=" float: left;">
                                <img src="http://media.wootware.co.za/media/catalog/product/cache/1/image/512x512/9df78eab33525d08d6e5fb8d27136e95/p/o/poseidon-gtx980-p-4gd5_005.jpg" width="120" height="120"/>
                            </div>
                            <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                                <p>
                                    ' . $row['descripcion_corta'] . '<br>
                                    Product Number: ' . $row['product_number'] . '<br>
                                    <a href="' . $row['link'] . '">Enlace fabricante</a><br>
                                    <a href="' . $row['link_instagram'] . '">Instagram - </a><a href="' . $row['link_facebook'] . '">Facebook</a><br>
                                    Lote: ' . $row['lote'] . '<br>
                                    ' . $row['observacion'] . '  <span class=" sombra" style="margin-left: 25px;  font-weight: 700; color:  gold; font-size: 17px; line-height: 20px;">' . $descuento . '</span>
                                </p>
                            </div>
                        </div>
                    </div>';
        }
        return $salida;
    }

    public function consultar_promos() {
        $salida = '';
        $articulo = new ArticuloDAO();
        $lista = $articulo->consultar_promos();
        $descuento = "";

        foreach ($lista as $row) {
            if ($row['promocion'] != 0) {
                $descuento = "Descuento del " . $row['promocion'] . '%';
            }
            $salida.=
                    '<div style=" height: 170px; width: 560px; margin-top: 10px;" class="mostrar_articulo">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">' . $row['codigo'] . '</div>
                            <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                                <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                                <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                            </div>
                        </div>
                        <div>
                            <div style=" float: left;">
                                <img src="http://media.wootware.co.za/media/catalog/product/cache/1/image/512x512/9df78eab33525d08d6e5fb8d27136e95/p/o/poseidon-gtx980-p-4gd5_005.jpg" width="120" height="120"/>
                            </div>
                            <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                                <p>
                                    ' . $row['descripcion_corta'] . '<br>
                                    Product Number: ' . $row['product_number'] . '<br>
                                    <a href="' . $row['link'] . '">Enlace fabricante</a><br>
                                    <a href="' . $row['link_instagram'] . '">Instagram - </a><a href="' . $row['link_facebook'] . '">Facebook</a><br>
                                    Lote: ' . $row['lote'] . '<br>
                                    ' . $row['observacion'] . '  <span class=" sombra" style="margin-left: 25px;  font-weight: 700; color:  gold; font-size: 17px; line-height: 20px;">' . $descuento . '</span>
                                </p>
                            </div>
                        </div>
                    </div>';
        }
        return $salida;
    }

    public function consultar_cpu() {
        $salida = '';
        $articulo = new ArticuloDAO();
        $lista = $articulo->consultar_cpu();
        $descuento = "";

        foreach ($lista as $row) {
            if ($row['promocion'] != 0) {
                $descuento = "Descuento del " . $row['promocion'] . '%';
            }
            $salida.=
                    '<div style=" height: 170px; width: 560px; margin-top: 10px;" class="mostrar_articulo">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">' . $row['codigo'] . '</div>
                            <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                                <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                                <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                            </div>
                        </div>
                        <div>
                            <div style=" float: left;">
                                <img src="http://media.wootware.co.za/media/catalog/product/cache/1/image/512x512/9df78eab33525d08d6e5fb8d27136e95/p/o/poseidon-gtx980-p-4gd5_005.jpg" width="120" height="120"/>
                            </div>
                            <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                                <p>
                                    ' . $row['descripcion_corta'] . '<br>
                                    Product Number: ' . $row['product_number'] . '<br>
                                    <a href="' . $row['link'] . '">Enlace fabricante</a><br>
                                    <a href="' . $row['link_instagram'] . '">Instagram - </a><a href="' . $row['link_facebook'] . '">Facebook</a><br>
                                    Lote: ' . $row['lote'] . '<br>
                                    ' . $row['observacion'] . '  <span class=" sombra" style="margin-left: 25px;  font-weight: 700; color:  gold; font-size: 17px; line-height: 20px;">' . $descuento . '</span>
                                </p>
                            </div>
                        </div>
                    </div>';
        }
        return $salida;
    }

    /*
      public function consultar() {
      $salida = '';
      $administrativo = new AdministrativoDAO();
      $lista = $administrativo->consultar();
      foreach ($lista as $row) {
      $salida.=
      '<div class="contenedor">
      <div style=" float: left;">
      <a href="consultar.php?tipo_doc_administrativo=' . $row['tipo_doc_administrativo'] . '&id_doc_administrativo=' . $row['numero_doc_administrativo'] . '"><div class="documento">' . $row['tipo_doc_administrativo'] . '</div><div class="numero">' . $row['numero_doc_administrativo'] . '</div><div class="nombre">' . $row['nombres_administrativo'] . ' ' . $row['apellidos_administrativo'] . '</div></a>
      </div>
      <div  class="opciones">
      <a href="consultar.php?tipo_doc_administrativo=' . $row['tipo_doc_administrativo'] . '&id_doc_administrativo=' . $row['numero_doc_administrativo'] . '"><img src="imagenes/icon_consultar.png" width="18" height="24" alt="icon_consultar"/></a>
      <a href="actualizar.php?tipo_doc_administrativo=' . $row['tipo_doc_administrativo'] . '&id_doc_administrativo=' . $row['numero_doc_administrativo'] . '"><img src="imagenes/icon_actualizar.png" width="30" height="26" alt="icon_actualizar"/></a>
      <a href="eliminar.php?tipo_doc_administrativo=' . $row['tipo_doc_administrativo'] . '&id_doc_administrativo=' . $row['numero_doc_administrativo'] . '"><img src="imagenes/icon_borrar.png" width="28" height="28" alt="icon_borrar"/></a>
      </div>
      </div>';
      }
      return $salida;
      }

      public function actualizar($tipo_doc_administrativo, $numero_doc_administrativo, $nombres_administrativo, $apellidos_administrativo, $telefono_movil, $usuario, $clave, $estado, $tipo_doc_administrativo_original, $numero_doc_administrativo_original) {
      $administrativo = new AdministrativoDAO();
      return $administrativo->actualizar($tipo_doc_administrativo, $numero_doc_administrativo, $nombres_administrativo, $apellidos_administrativo, $telefono_movil, $usuario, $clave, $estado, $tipo_doc_administrativo_original, $numero_doc_administrativo_original);
      }

      public function eliminar($tipo_doc_administrativo, $numero_doc_administrativo) {
      $administrativo = new AdministrativoDAO();
      return $administrativo->eliminar($tipo_doc_administrativo, $numero_doc_administrativo);
      }

      public function consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo) {
      $administrativo = new AdministrativoDAO();
      return $administrativo->consultar_por_tipoid_id($tipo_doc_administrativo, $numero_doc_administrativo);
      }
     */
}
