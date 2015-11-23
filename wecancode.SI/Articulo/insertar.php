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
        <link rel="stylesheet" type="text/css" href="../../estilos/estilo.css">
        <link rel="stylesheet" type="text/css" href="../../estilos/fuentes/general-ui/estilo_menu.css">
        <link rel="stylesheet" type="text/css" href="../../estilos/demo.css">
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
                //Guardo la info
                $('#boton_modificar').click(function () {
                    $("#botones_continuar").hide(500);
                    $("#salida").hide(500);
                    $("#formulario").show(500);
                    $('#codigo').focus();

                });
                $('#boton_nuevo').click(function () {
                    location.reload();
                });
                $('#boton_guardar').click(function () {
                    //$('#ajax_loader').css("display", "inline");
                    $.ajax({
                        type: 'post',
                        url: "php/insertar.php",
                        data: {
                            codigo: $('#codigo').val(),
                            lote: $('#lote').val(),
                            descripcion_publicar: $('#descripcion_publicar').val(),
                            descripcion_corta: $('#descripcion_corta').val(),
                            product_number: $('#product_number').val(),
                            link: $('#link').val(),
                            link_facebook: $('#link_facebook').val(),
                            link_instagram: $('#link_instagram').val(),
                            link_mercadolibre: $('#link_mercadolibre').val(),
                            promocion: $('#promocion').val(),
                            observacion: $('#observacion').val()
                        },
                        success: function (data) {  // Esta función sólo se ejecuta si la petición al servidor funcionó:   
                            //$('#ajax_loader').css("display", "none");
                            $("#botones_continuar").show(500);
                            $("#formulario").hide(500);
                            $("#salida").hide(500);
                            $('#salida').html(data);
                            $("#salida").show(500);
                        },
                        error: function (txt) {
                            alert('Ha ocurrido un error');
                            // $('#ajax_loader').css("display", "none");
                            $("#salida").text(txt);
                            $("#salida").show("blind", 500);
                        }
                    });
                });
                $('#codigo').focus();
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
                <div class="" style=" font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px; text-align: center; line-height: 50px;">
                    Registro de Artículos
                </div>
                <div id="formulario" style=" margin-top: 10px; letter-spacing: -3px; font-size: 30px;">
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 120px; height: 50px; line-height: 40px;">
                            Código
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="codigo" style="text-transform: uppercase; width: 415px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 25px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 120px; height: 50px; line-height: 40px;">
                            Lote
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <select id="lote" name="lote" style=" background-color: white; width: 55px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 25px; padding-left: 10px;">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>F</option>
                            </select>

                        </div>
                    </div>
                    <div style=" height: 110px; width: 500px;">
                        <div style=" float: left; width: 180px; height: 50px; line-height: 40px;">
                            Descripción
                        </div>
                        <div style=" width: 200px; height: 50px; ">
                            <textarea id="descripcion_corta" style="resize: none; width: 535px; height: 40px; font-family: 'Montserrat', sans-serif; font-size: 15px; padding-left: 10px; padding-right: 10px;" name="descripcion_corta" ></textarea>
                        </div>
                    </div>
                    <div style=" height: 110px; width: 500px;">
                        <div style=" float: left; width: 280px; height: 50px; line-height: 40px;">
                            Descripción HTML
                        </div>
                        <div style=" width: 200px; height: 50px; ">
                            <textarea id="descripcion_publicar" style="resize: none; width: 535px; height: 40px; font-family: 'Montserrat', sans-serif; font-size: 15px; padding-left: 10px; padding-right: 10px;" name="descripcion_html" ></textarea>
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px;">
                            # Producto
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="product_number" style=" text-transform: uppercase; width: 363px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 25px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px;">
                            Enlace URL
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="link" style="width: 363px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 20px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px;">
                            Facebook
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="link_facebook" style="width: 363px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 20px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px;">
                            Instagram
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="link_instagram" style="width: 363px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 20px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px; letter-spacing: -3px;">
                            Mercadolibre
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="link_mercadolibre" style="width: 363px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 20px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px;">
                            Notas
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <input id="observacion" style="width: 363px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 20px; padding-left: 10px; padding-right: 10px;"    type="text" name="codigo" value=""  />
                        </div>
                    </div>
                    <div style=" height: 50px; width: 500px;">
                        <div style=" float: left; width: 170px; height: 50px; line-height: 40px;">
                            Descuento
                        </div>
                        <div style=" float: left; width: 250px; height: 50px; ">
                            <select id="promocion" name="promocion" style=" background-color: white; width: 90px; height: 35px; font-family: 'Montserrat', sans-serif; font-size: 25px; padding-left: 10px;">
                                <option>0%</option>
                                <option>5%</option>
                                <option>10%</option>
                                <option>20%</option>
                                <option>30%</option>
                                <option>40%</option>
                                <option>50%</option>
                                <option>60%</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="botones_continuar" style="display: none; width: 560px; height: 50px; margin-top: 5px; ">
                    <div id="boton_modificar" class="" style=" float: left; cursor: pointer; width: 280px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px; text-align: center; line-height: 50px;  ">
                        Modificar datos 
                    </div>
                    <div id="boton_nuevo" class="" style="float: left; cursor: pointer; width: 280px; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px; text-align: center; line-height: 50px; ">
                        Nuevo artículo 
                    </div>
                </div>
                <div id="boton_guardar"  style="cursor: pointer; font-weight: 700; letter-spacing: -2px;  height: 50px; background-color: rgb(231,76,60); color:  white; font-size: 37px; text-align: center; line-height: 50px; margin-top: 5px;">
                    Guardar
                </div>
                <div id="salida" style="width: 560px; margin-top: 5px; text-align:justify;"></div>
            </div>
        </div>



        <div id="pie"></div>
    </body>
</html>
