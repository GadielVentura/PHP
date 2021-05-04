<?php

class MvcController{
    //llamada a la plantilla
    public function plantilla(){

        include "vistas/template.php";
    }

    //interaccion del usuario
    public function enlacesPaginasController(){
        $enlacesController = htmlspecialchars($_GET["action"]);
        
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        
        include $respuesta;
    }
}

?>