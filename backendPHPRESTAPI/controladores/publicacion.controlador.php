<?php

Class ControladorPublicacion{
    /****************
     * Mostrar Datos
     */
    static public function ctrlConsultarTwit($id){

        $respuesta = ModeloPublicacion::mdlConsultarTwit($id);
        return $respuesta;

    }
    
    static public function ctrlConsultarAllTwits(){
        
        $respuesta = ModeloPublicacion::mdlConsultarAllTwits();
        return $respuesta;

    }

    static public function ctrlAgregarTwit(){
        
        $respuesta = ModeloPublicacion::mdlAgregarTwit();
        return $respuesta;

    }

}