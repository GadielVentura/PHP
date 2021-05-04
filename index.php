<?php

/*el index mostramos la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones que el usuario envia al controlador*/ 
/* require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la funcion require() no se encuentra saltara un error "php fatal error" y el programa php se detendra */

/*la version require_once() funciona igual, salvo que impide la carga del archivo mas de una vez*/

//si requqerimos el codigo mas de una vez corremos el riesgo de redeclaciones de var, funciones o clases

require_once "controladores/controler.php";
require_once "modelos/model.php";

$mvc = new MvcController();
$mvc -> plantilla();

?>