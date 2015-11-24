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
        <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
        <link rel="stylesheet" type="text/css" href="estilos/fuentes/general-ui/estilo_menu.css">
        <link rel="stylesheet" type="text/css" href="estilos/fuentes/general-ui/flaticon.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

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
        <div style=" height: 500px; width: 800px; margin-top: 10px;">
            <div class="" style=" padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
                <div style=" float: left; width: 500px;">CPUI7860</div>
                <div style=" float: left; width: 270px; padding-right: 10px;font-size:  15px; font-weight:300; height: 50px; line-height: 25px; letter-spacing: -1px;">
                    <div style=" height: 25px; text-align: right;">Articulo Nuevo</div>
                    <div style=" height: 25px; text-align:  right;">Precio $4.135.000</div>
                </div>
            </div>
            <div style=" font-size: 20px; margin-top: 5px;">
                Intel® Core™ i7-4790K Processor (8M Cache, up to 4.40 GHz)
            </div>
            <div style=" margin-top: 10px;">
                <div style=" float: left;  ">
                    <img src="http://www.avadirect.com/Pictures/500/9772404_5.png" width="400" height="400"/>
                </div>
                <div style="width: 380px; height: 405px; float: left; padding-left: 10px; padding-right: 5px; font-size: 15px;">
                    <p>
                        <span style=" font-size:  25px;" >Precio: COP $14.000</span><br>
                        Intel® Core™ i7-4790K Processor (8M Cache, up to 4.40 GHz)<br><br>
                        Product Number: GTX1380GF1534FQW123<br>
                        Enlace fabricante Aqui<br>
                    </p>
                    <div style=" height: 25px;">Cantidad disponible <span style="font-size: 20px; margin-left: 5px;">3</span>
                    </div>
                    <div class="fb-like"></div>
                    
                        <img src="imagenes/logo_facebook.png" width="65" height="65" alt="icono_facebook"/>
                        <img src="imagenes/logo_instagram.png" width="65" height="65" alt="icono_facebook"/>
                        <img src="imagenes/logo_mercadolibre.png" width="65" height="65" alt="icono_facebook"/>
                        <img src="imagenes/logo_whatsapp.png" width="65" height="65" alt="icono_facebook"/>
                        <img src="imagenes/logo_gmail.png" width="65" height="65" alt="icono_facebook"/>
                    

                </div>
            </div>
        </div>
        <div style="  height: 70px;  color:  white; font-size: 37px;  padding: 10px; border: solid 1px #CCC; ">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65" >
            <img style="" src="http://k32.kn3.net/taringa/7/F/E/8/7/B/_Vik/7F9.jpg" width="65" height="65">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65" >
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65">
            <img style="" src="http://k32.kn3.net/taringa/7/F/E/8/7/B/_Vik/7F9.jpg" width="70" height="70">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="65" height="65">
        </div>
        <div style="margin-top: 10px; padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
            Descripción del articulo
        </div>
        <div style="width: 785px; padding-left: 10px; padding-right: 5px; font-size: 15px; text-align: center;">
            <p>
                Combo Board + Procesador + Ram.<br>
                Articulo Refurbished.<br>
                Se entrega:<br>
                Board DELL 0XC7MM T1500 Refurbished No Incluye IO PLATE, no tiene video interno.<br>
                Procesador intel i3 540, no incluye disipador ni ventilador<br>
                Memoria ram 4gb DDR3 1330MHZ Refurbished<br>
                Las memorias se entregan en kit de 4 memorias de 1gb. capacidad maxima 16GB 4x4GB<br>
                SAMSUNG M378B2873EH1-CH9<br>
                Pagos Bancolombia y efecty<br>
                Envios a todo el pais.<br>
            </p>
        </div>
        <div style="margin-top: 10px; padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
            ¿Tienes alguna duda? ¡Realiza un comentario!
        </div>
        <div class="fb-comments" data-href="www.wecancode.com.co" data-width="800" data-numposts="5"></div>   <div style=" padding-left: 10px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px;  line-height: 50px;">
            Articulos similares
        </div>
        <div style="  height: 100px;  color:  white; font-size: 37px;  ">
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="140" >
            <img style="" src="http://k32.kn3.net/taringa/7/F/E/8/7/B/_Vik/7F9.jpg" width="145" >
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="140" >
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="140" >
            <img style="" src="http://www.legitreviews.com/images/reviews/540/asrock_667d_fullboard.jpg" width="140" >
        </div>


    </div>

    <div id="pie"></div>
</body>
</html>
