<?php

require_once('../../models/signo.php');
require_once('../../db/connection.php');
$codigo = $_GET['signo'];

$signo = Signo::getByCodigo($codigo);
$configuracion = explode('/', $signo->configuracion);
$movimiento = explode('/', $signo->movimiento);
require_once('signo.view.php');

?>