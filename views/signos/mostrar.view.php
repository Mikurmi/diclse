<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Adan Criado">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Singos</title>
    <link rel="stylesheet" href="../../assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <h1>DLSE</h1>
    </div>
    <div class="topnav" id="topnav">
        <button style="width: 80px; height: 40px;" id="menu">
            <i class="fa fa-search" style="color: white;"></i>
        </button>
        <br>
        <form action="" method="post">
        <div class="buscador">
                <div class="item">
                    <img src='../../img_buscador/configuracion/configuracion.gif' style='width: 150px'>
                    <div class="colec-boton" id="conf">
                        <!-- style="display: none;" -->
                        <label><input id="extendidos" type="radio" name="conf1" value="extendidos" style="visibility:hidden; display: none;"  >
                            <div class="card_buscador">
                                <img src='../../img_buscador/configuracion/extendidos.PNG' >
                            </div>
                        </label>
                        <label><input id="flexionados" type="radio" name="conf1" value="flexionados" style="visibility:hidden; display: none;"  >
                            <div class="card_buscador">
                                <img src='../../img_buscador/configuracion/flexionados.PNG' >
                            </div>
                        </label>
                        <label><input id="cerrados" type="radio" name="conf1" value="cerrados" style="visibility:hidden; display: none;"  >
                            <div class="card_buscador">
                                <img src='../../img_buscador/configuracion/cerrados.PNG' >
                            </div>
                        </label>
                        <label><input id="separados" type="radio" name="conf2" value="separados" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/configuracion/separados.PNG' >
                            </div>
                        </label>
                        <label><input id="juntos" type="radio" name="conf2" value="juntos" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/configuracion/juntos.PNG' >
                            </div>
                        </label>
                        <label><input id="pulgar" type="radio" name="conf3" value="pulgar" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/configuracion/pulgar.PNG' >
                            </div>
                        </label>
                    </div>
                </div>

                <div class="item">
                    <img src='../../img_buscador/orientacion/orientacion.gif' style='width: 150px'>
                    <div class="colec-boton">
                        <label><input id="1a" type="radio" name="ori" value="1a" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/orientacion/1a.jpg' >
                            </div>
                        </label>
                        <label><input id="1b" type="radio" name="ori" value="1b" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/orientacion/1b.jpg' >
                            </div>
                        </label>
                        <label><input id="1c" type="radio" name="ori" value="1c" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/orientacion/1c.jpg' >
                            </div>
                        </label>
                        <label><input id="1d" type="radio" name="ori" value="1d" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/orientacion/1d.jpg' >
                            </div>
                        </label>
                    </div>
                </div>

                <div class="item">
                    <img src='../../img_buscador/movimiento/movimiento.gif' style='width: 150px'>
                    <div class="colec-boton">
                        <label><input id="desplazamiento" type="radio" name="mov1" value="desplazamiento" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/movimiento/desplazamiento.PNG' >
                            </div>
                        </label>
                        <label><input id="fijo" type="radio" name="mov1" value="fijos" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/movimiento/fijo.PNG' >
                            </div>
                        </label>
                        <label><input id="ambos" type="radio" name="mov1" value="ambos" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/movimiento/ambos.PNG' >
                            </div>
                        </label>
                        <label><input id="recto" type="radio" name="mov2" value="recto" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/movimiento/recto.PNG' style="width: 90px">
                            </div>
                        </label>
                        <label><input id="ondulado" type="radio" name="mov2" value="ondulado" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/movimiento/ondulado.PNG' >
                            </div>
                        </label>
                        <label><input id="curvo" type="radio" name="mov2" value="curvo" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/movimiento/curvo.PNG' style="height: 75px">
                            </div>
                        </label>
                        
                    </div>
                </div>

                <div class="item">
                    <img src='../../img_buscador/espacio/espacio.gif' style='width: 150px'>
                    <div class="colec-boton">
                        <label><input id="cabeza" type="radio" name="esp" value="cabeza" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/espacio/cabeza.PNG' style='width: 100px;' >
                            </div>
                        </label>
                        <label><input id="tronco" type="radio" name="esp" value="tronco" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/espacio/tronco.PNG' style='width: 100px;' >
                            </div>
                        </label>
                        <label><input id="brazo" type="radio" name="esp" value="brazo" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/espacio/brazo.PNG' style='width: 100px;' >
                            </div>
                        </label>
                    </div>
                </div>

                <div class="item">
                    <img src='../../img_buscador/no_manual/no_manual.gif' style='width: 150px'>
                    <div class="colec-boton">
                        <label><input id="no_manual" type="radio" name="no_man" value="no_man" style="visibility:hidden; display: none;" >
                            <div class="card_buscador">
                                <img src='../../img_buscador/no_manual/no_manual.PNG'>
                            </div>
                        </label>
                    </div>
                </div>
                <span></span>
                <span></span>
                <input type="submit" name="submit">
                <input id="nada" type="radio" name="conf1" value="_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="conf2" value="_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="conf3" value="_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="ori" value="1_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="mov1" value="_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="mov2" value="_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="esp" value="_" style="visibility:hidden; display: none;" checked >
                <input id="nada" type="radio" name="no_man" value="_" style="visibility:hidden; display: none;" checked >
            </div>
            </form>
    </div>
    <script src="../../helpers/desplegable.js"></script>
    
    
</body>
</html>