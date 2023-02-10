<?php

Class ControladorCategoria{
    /****************
     * Mostrar Datos
     */
    static public function ctrlConsultarCategoria($id){
        
        $respuesta = ModeloCategoria::mdlConsultarCategoria($id);
        return $respuesta;
    }

    static public function ctrlCargarCategoria($region){
        $respuesta = ModeloCategoria::mdlCargarRegion($region);
        return $respuesta;
    }
}