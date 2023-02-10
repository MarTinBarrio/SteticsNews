<?php

Class ControladorRegion{
    /****************
     * Mostrar Datos
     */
    static public function ctrlConsultarRegion($id){
        
        $respuesta = ModeloRegion::mdlConsultarRegion($id);
        return $respuesta;
    }

    static public function ctrlCargarRegion($region){
        $respuesta = ModeloRegion::mdlCargarRegion($region);
        return $respuesta;
    }
}