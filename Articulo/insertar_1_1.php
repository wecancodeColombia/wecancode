<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>WeCanCode</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="../estilos/estilo.css">
        <link rel="stylesheet" type="text/css" href="../estilos/fuentes/general-ui/estilo_menu.css">
        <link rel="stylesheet" type="text/css" href="../estilos/demo.css">
        <link rel="stylesheet" type="text/css" href="../estilos/fuentes/general-ui/flaticon.css"> 
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

        <div id="area_trabajo">


            <div style=" margin: 20px auto; width: 500px; min-width: 560px; font-family: 'Montserrat', sans-serif; " >
                <div style=" height: 200px; margin-top: 10px;">
                    <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                        <div style=" float: left; width: 350px;">CPUI7860</div>
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
                                ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                Product Number: GTX1380GF1534FQW123<br>
                                Enlace fabricante Aqui<br>
                                Notas: Articulo Usado<br>
                                Lote: A<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div style=" height: 200px; margin-top: 10px;">
                    <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                        <div style=" float: left; width: 350px;">CPUI7860</div>
                        <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                            <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                            <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                        </div>
                    </div>
                    <div>
                        <div style=" float: left;">
                            <img src="https://pbs.twimg.com/profile_images/610307099864662016/JfHhO2W8.jpg" width="120" height="120"/>
                        </div>
                        <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                            <p>
                                ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                Product Number: GTX1380GF1534FQW123<br>
                                Enlace fabricante Aqui<br>
                                Notas: Articulo Usado<br>
                                Lote: A<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div style=" height: 200px; margin-top: 10px;">
                    <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                        <div style=" float: left; width: 350px;">CPUI7860</div>
                        <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                            <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                            <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                        </div>
                    </div>
                    <div>
                        <div style=" float: left;">
                            <img src="http://cdn.takas.lk/media/catalog/product/cache/1/image/512x512/9df78eab33525d08d6e5fb8d27136e95/-/u/-usr-local-www-raptor_rwd-cache-56148c008e20a.jpg" width="120" height="120"/>
                        </div>
                        <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                            <p>
                                ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                Product Number: GTX1380GF1534FQW123<br>
                                Enlace fabricante Aqui<br>
                                Notas: Articulo Usado<br>
                                Lote: A<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div style=" height: 200px; margin-top: 10px;">
                    <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                        <div style=" float: left; width: 350px;">CPUI7860</div>
                        <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                            <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                            <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                        </div>
                    </div>
                    <div>
                        <div style=" float: left;">
                            <img src="https://scontent.cdninstagram.com/hphotos-xap1/t51.2885-15/e15/10608156_110745685935656_1281490358_n.jpg" width="120" height="120"/>
                        </div>
                        <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                            <p>
                                ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                Product Number: GTX1380GF1534FQW123<br>
                                Enlace fabricante Aqui<br>
                                Notas: Articulo Usado<br>
                                Lote: A<br>
                            </p>
                        </div>
                    </div>
                </div>


                <div style=" margin: 20px auto; width: 500px; min-width: 560px; font-family: 'Montserrat', sans-serif; " >
                    <div style=" height: 200px; margin-top: 10px;">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">CPUI7860</div>
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
                                    ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                    Product Number: GTX1380GF1534FQW123<br>
                                    Enlace fabricante Aqui<br>
                                    Notas: Articulo Usado<br>
                                    Lote: A<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style=" height: 200px; margin-top: 10px;">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">CPUI7860</div>
                            <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                                <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                                <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                            </div>
                        </div>
                        <div>
                            <div style=" float: left;">
                                <img src="https://pbs.twimg.com/profile_images/610307099864662016/JfHhO2W8.jpg" width="120" height="120"/>
                            </div>
                            <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                                <p>
                                    ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                    Product Number: GTX1380GF1534FQW123<br>
                                    Enlace fabricante Aqui<br>
                                    Notas: Articulo Usado<br>
                                    Lote: A<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style=" height: 200px; margin-top: 10px;">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">CPUI7860</div>
                            <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                                <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                                <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                            </div>
                        </div>
                        <div>
                            <div style=" float: left;">
                                <img src="http://cdn.takas.lk/media/catalog/product/cache/1/image/512x512/9df78eab33525d08d6e5fb8d27136e95/-/u/-usr-local-www-raptor_rwd-cache-56148c008e20a.jpg" width="120" height="120"/>
                            </div>
                            <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                                <p>
                                    ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                    Product Number: GTX1380GF1534FQW123<br>
                                    Enlace fabricante Aqui<br>
                                    Notas: Articulo Usado<br>
                                    Lote: A<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style=" height: 200px; margin-top: 10px;">
                        <div class="" style="padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                            <div style=" float: left; width: 350px;">CPUI7860</div>
                            <div style=" float: left; width: 190px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px;">
                                <div style=" height: 25px; text-align: right;">Costo $105.000</div>
                                <div style=" height: 25px; text-align:  right;">Publico $4.135.000</div>
                            </div>
                        </div>
                        <div>
                            <div style=" float: left;">
                                <img src="https://scontent.cdninstagram.com/hphotos-xap1/t51.2885-15/e15/10608156_110745685935656_1281490358_n.jpg" width="120" height="120"/>
                            </div>
                            <div style=" float: left; padding-left: 10px; padding-right: 10px;">
                                <p>
                                    ASUS Nvidia Gtx 980 Ti 4GB Ram<br>
                                    Product Number: GTX1380GF1534FQW123<br>
                                    Enlace fabricante Aqui<br>
                                    Notas: Articulo Usado<br>
                                    Lote: A<br>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <div id="pie"></div>
    </body>
</html>