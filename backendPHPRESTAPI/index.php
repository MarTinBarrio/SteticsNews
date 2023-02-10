<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/publicacion.controlador.php";
require_once "modelos/modelo.publicacion.php";

require_once "controladores/region.controlador.php";
require_once "modelos/modelo.region.php";

require_once "controladores/categoria.controlador.php";
require_once "modelos/modelo.categoria.php";


//require_once "vendor/autoload.php";

$plantilla = new controladorPlantilla();
$plantilla -> ctrPlantilla();

?>
