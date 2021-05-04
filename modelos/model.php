<?php

class EnlacesPaginas{
    public static function enlacesPaginasModel($enlacesModel){
        if($enlacesModel=="inicio" || $enlacesModel=="nosotros" || $enlacesModel=="servicios" ||  $enlacesModel=="contactenos"){
            $module="vistas/modulos/".$enlacesModel.".php";
        }
        return $module;
    }
}
?>