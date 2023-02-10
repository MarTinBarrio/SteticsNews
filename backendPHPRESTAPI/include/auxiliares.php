<?php

ini_set('display_errors', 0); // 0 para q los errores NO aparezcan "tambien" en el navegador.
ini_set('display_errors', 1); // 1 para q los errores aparezcan "tambien" en el navegador.

ini_set("log_errors", 1); //con 1 indico q quiero q se genere un archivo de error.
ini_set("error_log","php_error_log"); //elijo donde y el nombre del archivo. //ini_set("error_log","htdocs/errores/php_error_log");


function ver ($variable){
    echo '<pre class="bg-white">'; print_r($variable); echo '</pre>';
}
