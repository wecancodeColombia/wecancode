<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/wecancode/wecancode.FACADE/Articulo.php';
$articulo = new articulo();
$salida = $articulo->consultar();
?>
<html>
    <head>
        <title>WeCanCode</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="../../estilos/estilo.css">
        <link rel="stylesheet" type="text/css" href="../../estilos/fuentes/general-ui/estilo_menu.css">
        <link rel="stylesheet" type="text/css" href="../../estilos/fuentes/general-ui/flaticon.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#accion_menu').click(function () {
                    if ($('#menu').css("display") === "none")
                    {
                        $("#menu").show("fast");
                        $("#menu_articulo").show("fast", function showNext() {
                            $(this).next("div").show("fast", showNext);
                        });
                    }
                    else
                    {
                        cont = 0;
                        $("#menu_proveedor").hide("fast", function hideNext() {
                            $(this).prev("div").hide("fast", hideNext);
                            cont++;
                            if (cont === 5)
                                $("#menu").hide("fast");
                        });

                    }
                });

                $('#menu_articulo').click(function () {
                    menu_mostrar_opc('#menu_articulo_opc');
                });
                $('#menu_inventario').click(function () {
                    menu_mostrar_opc('#menu_inventario_opc');
                });
                $('#menu_factura').click(function () {
                    menu_mostrar_opc('#menu_factura_opc');
                });
                $('#menu_cliente').click(function () {
                    menu_mostrar_opc('#menu_cliente_opc');
                });
                $('#menu_proveedor').click(function () {
                    menu_mostrar_opc('#menu_proveedor_opc');
                });


                function menu_mostrar_opc(control) {
                    menu_esconder_opc();
                    if ($(control).css("display") === "none")
                        $(control).show("fast");
                    else
                        $(control).hide("fast");
                }
                function menu_esconder_opc() {
                    $("#menu_articulo_opc").hide("fast");
                    $("#menu_inventario_opc").hide("fast");
                    $("#menu_factura_opc").hide("fast");
                    $("#menu_cliente_opc").hide("fast");
                    $("#menu_proveedor_opc").hide("fast");

                }




            });
        </script>


    </head>
    <body>
        <div id="cabezote" >
            <div id="sesion">
                <div class="flaticon-profile29 sombra" style=" float: left; margin-top: 10px; "></div>
                <div class="flaticon-home166 sombra" style="float: left; margin-left: -10px; margin-top:  12px;"></div>
                <div class="flaticon-message31 sombra" style=" float: left; margin-left: -10px; margin-top: 15px;"></div>
                <div class="flaticon-envelope54 sombra" style="float: left; margin-left: -10px; margin-top:  10px;"></div>
            </div>
            <div id="accion_menu">
                <div class="flaticon-pin61 sombra" style=" padding-top: 13px; "></div>
            </div>
            <div id="logo" class="sombra">WeCanCode</div>          
        </div>
        <div id="menu">
            <div style=" height: 90px;">
                <div id="menu_articulo">
                    <div class="flaticon-notebook79 sombra" style=" float: left; margin-top: 10px; margin-left: 10px; "></div>
                </div>
                <div id="menu_inventario">
                    <div class="flaticon-chart47 sombra" style=" float: left; margin-top: 10px; margin-left: 10px; "></div>
                </div>
                <div id="menu_factura">
                    <div class="flaticon-notes26 sombra" style=" float: left; margin-top: 10px; margin-left: 9px; "></div>
                </div>
                <div id="menu_cliente">
                    <div class="flaticon-bag45 sombra" style=" float: left; margin-top: 10px;  margin-left: 9px;"></div>
                </div>
                <div id="menu_proveedor">
                    <div class="flaticon-bulb19 sombra" style=" float: left; margin-top: 10px; margin-left: 9px; "></div>
                </div>
            </div>
            <div id="menu_articulo_opc">
                <div style=" height: 15px;">
                    <div class="triangulo" style="margin-left: 28px; border-bottom-color:rgb(231,76,60);"></div>
                </div>
                <div style=" background-color: rgb(231,76,60); height: 60px; border-radius: 5px; ">
                    <div style=" margin-left: 53px;">
                        <a href="insertar.php"><div class="flaticon-add13 sombra" style=" float: left; margin-left: 15px; cursor: pointer; "></div></a>
                        <a href="modificar.php"><div class="flaticon-pencil124 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div></a>
                        <a href="eliminar.php"><div class="flaticon-garbage13 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div></a>
                        <a href="buscar.php"><div class="flaticon-magnifier52 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div></a>
                    </div>
                </div>
            </div>
            <div id="menu_inventario_opc">
                <div style=" height: 15px;">
                    <div class="triangulo" style=" margin-left: 111px; border-bottom-color: rgb(231,76,60);"></div>
                </div>
                <div style=" background-color: rgb(231,76,60);; height: 60px; border-radius: 5px; ">
                    <div style=" margin-left: 53px;">
                        <div class="flaticon-add13 sombra" style=" float: left; margin-left: 15px; cursor: pointer; "></div>
                        <div class="flaticon-pencil124 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-garbage13 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-magnifier52 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                    </div>
                </div>
            </div>
            <div id="menu_factura_opc">
                <div style=" height: 15px;">
                    <div class="triangulo" style=" margin-left: 197px; border-bottom-color: rgb(231,76,60);;"></div>
                </div>
                <div style=" background-color: rgb(231,76,60); height: 60px; border-radius: 5px; ">
                    <div style=" margin-left: 53px;">
                        <div class="flaticon-add13 sombra" style=" float: left; margin-left: 15px; cursor: pointer; "></div>
                        <div class="flaticon-pencil124 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-garbage13 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-magnifier52 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                    </div>
                </div>
            </div>
            <div id="menu_cliente_opc">
                <div style=" height: 15px;">
                    <div class="triangulo" style=" margin-left: 280px; border-bottom-color: rgb(231,76,60);"></div>
                </div>
                <div style=" background-color:rgb(231,76,60); height: 60px; border-radius: 5px; ">
                    <div style=" margin-left: 53px;">
                        <div class="flaticon-add13 sombra" style=" float: left; margin-left: 15px; cursor: pointer; "></div>
                        <div class="flaticon-pencil124 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-garbage13 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-magnifier52 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                    </div>
                </div>
            </div>
            <div id="menu_proveedor_opc">
                <div style=" height: 15px;">
                    <div class="triangulo" style=" margin-left: 365px; border-bottom-color: rgb(231,76,60);"></div>
                </div>
                <div style=" background-color: rgb(231,76,60); height: 60px; border-radius: 5px; ">
                    <div style=" margin-left: 53px;">
                        <div class="flaticon-add13 sombra" style=" float: left; margin-left: 15px; cursor: pointer; "></div>
                        <div class="flaticon-pencil124 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-garbage13 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                        <div class="flaticon-magnifier52 sombra" style=" float: left;margin-left: 15px; cursor: pointer "></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="area_trabajo" style="  margin: 20px auto; width: 800px; font-family: 'Montserrat', sans-serif; letter-spacing: -1px; ">

            <div id="menu_lateral" style=" float: left; width: 200px; margin-top: 10px; font-weight: 700; letter-spacing: 0px;">
                <a href="buscar.php"><div style=" color:  #000;">•Toda la tienda•</div></a>
                <a href="buscar_promos.php"><div style=" color:  #000;">•Articulos en promoción•</div></a>
                <div style="height: 10px;"></div>
                <a href="buscar_cpu.php"><div style=" color:  #000;">Procesadores</div></a>
                <a href="buscar_mb.php"><div style=" color:  #000;">Placas madre</div></a>
                <a href="buscar_gpu.php"><div style=" color:  #000;">Tarjetas de video</div></a>
                <a href="buscar_ram.php"><div style=" color:  #000;">Memorias ram</div></a>
                <a href="buscar_hdd.php"><div style=" color:  #000;">Discos duros</div></a>
                <a href="buscar_combo.php"><div style=" color:  #000;">Combos Cpu+Board+Ram</div></a>
            </div>
            <div style=" float: left; width: 500px; min-width: 560px; font-family: 'Montserrat', sans-serif; " >
                <?php echo $salida; ?>
            </div>
        </div>



        <div id="pie"></div>
    </body>
</html>
