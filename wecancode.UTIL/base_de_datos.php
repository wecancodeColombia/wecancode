<?php

class base_de_datos {

    public static function consultar($sql) {
        //cadena conexion para servidor real
        //cadena conixion local
        $db = new mysqli('localhost', 'root', '', 'wecancode');
        $db->query("SET NAMES UTF8");
        $db->query("SET CHARACTER SET utf8");
        // El primer parámetro es el host en donde se encuentra la base de datos
        // El segundo parámetro es el usuario con el que se desea conectar
        // El tercer parámetro es la clave del usuario 
        // El cuarto es la base de datos que se desea utilizar
        // Por ultimo se debe revisar si la conexión se realizo sin ningún problema 
        // para esto se hace uso de la propiedad 'connect_errno' sobre el objeto  de la conexión a la base de datos
        if ($db->connect_errno > 0) {
            die('Imposible conectar [' . $db->connect_error . ']');
            // Si se consiguió algún error entonces se muestra cual fue
        }
        if (!$resultado = $db->query($sql)) {
            die('Ocurrio un error ejecutando el query [' . $db->error . ']');
            $db->close();
        } else {
            $salida = array();
            while ($fila = $resultado->fetch_assoc()) {
                // $fila es un arreglo asociativo con todos los campos que se pusieron en el select
                array_push($salida, $fila);
            }
            return $salida;
        }
        $db->close();
    }

    public static function actualizar($sql) {
        $salida = 0;
        $db = new mysqli('localhost', 'root', '', 'wecancode');
        $db->query("SET CHARACTER SET utf8");
        // El primer parámetro es el host en donde se encuentra la base de datos
        // El segundo parámetro es el usuario con el que se desea conectar
        // El tercer parámetro es la clave del usuario 
        // El cuarto es la base de datos que se desea utilizar
        // Por ultimo se debe revisar si la conexión se realizo sin ningún problema 
        // para esto se hace uso de la propiedad 'connect_errno' sobre el objeto 
        // de la conexión a la base de datos
        if ($db->connect_errno > 0) {
            die('Imposible conectar [' . $db->connect_error . ']');
            $db->close();
            // Si se consiguió algún error entonces se muestra cual fue
        } else {
            if (!$db->query($sql)) {
                $error = $db->error;
                $codigo_error = $db->errno;
                $db->close();
                die(base_de_datos::lista_error($codigo_error, $error, $sql));
                //die('Ocurrio un error ejecutando la actualización [' . $db->error . ']');
            } else {
                //Retorno la cantidad de lineas actualizadas
                $salida = $db->affected_rows;
                $db->close();
            }
        }
        return $salida;
    }

    public static function actualizar_transaccion($sql) {
        $db = new mysqli('localhost', 'root', '', 'wecancode');
        //$db = new mysqli('localhost', 'turnoenc_admin', 'Tcbh7eeb', 'turnoenc_data');

        /* servidor web *///$db = new mysqli('turnoenlinea.com', 'turnoenc_admin', 'Tcbh7eeb', 'turnoenc_data');
        $db->query("SET NAMES UTF8");
        $db->query("SET CHARACTER SET utf8");
        $db->autocommit(false);
        // El primer parámetro es el host en donde se encuentra la base de datos
        // El segundo parámetro es el usuario con el que se desea conectar
        // El tercer parámetro es la clave del usuario 
        // El cuarto es la base de datos que se desea utilizar
        // Por ultimo se debe revisar si la conexión se realizo sin ningún problema 
        // para esto se hace uso de la propiedad 'connect_errno' sobre el objeto 
        // de la conexión a la base de datos
        if ($db->connect_errno > 0) {
            die('Imposible conectar [' . $db->connect_error . ']');
            $db->close();
            // Si se consiguió algún error entonces se muestra cual fue
        } else {
            $querys = split(';', $sql);
            foreach ($querys as $row) {
                $db->query($row);
            }
            // $db->query($sql);
            $afectadas = $db->affected_rows;
            if ($afectadas > 0) {
                $db->commit();
                $db->close();
                return $afectadas;
            } else {
                die('Ocurrio un error ejecutando la actualización  [' . $db->error . ']');
                $db->rollback();
                $db->close();
            }
            //Retorno la cantidad de lineas actualizadas
        }
    }

    private static function lista_error($codigo_error, $error, $query) {
        $salida = '';
        switch ($codigo_error) {
            case 1062:
                $salida = "<span style='color:red;'>Error</span>, Los datos que intenta ingresar a la base de datos ya se encuentran registrados, <b>Código de error: 1062</b>";
                break;
            case 1451:
                echo "<span style='color:red;'>Error</span>, El registro no se puede eliminar, este registro se encuentra referenciado en otro registro, elimine la cascada de registros en los que el registro a eliminar se encuentre presente, <b>Código de error: 1451</b>";
            case 1452:
                echo "<span style='color:red;'>Error</span>, El registro no se puede crear / actualizar porque uno o mas datos ingresados no estan registrados (refrenciados) en la base de datos, violacion a llaves foraneas, <b>Código de error: 1451</b>";

                break;
            default :
                $salida = "<span style='color:red;'>Error</span>, Ha ocurrido un error a nivel de base de datos, intente nuevamente, <b>Código de error: " . $codigo_error . "</b>";
        }
        return $salida . ' Para seguimiento del error envie un e-mail haciendo clic <b>'
                . '<a href="mailto:debug@turnoenlinea.com?'
                . 'subject=Reporte de error&'
                . 'body=Detección de error en ejecución.%0D%0A%0D%0A'
                . 'Código de error: ' . $codigo_error . '%0D%0A'
                . 'Mensaje MYSQL: ' . $error . '.%0D%0A'
                . 'QUERY: ' . $query . '">'
                . 'Aqui</a></b> '
                . 'Este email contiene toda la información para el correcto tratamiento del error. <b>Gracias.</b>';
    }


}
