<?php

require_once "conexion.php";

Class ModeloRegion{

    static public function mdlConsultarRegion($id){
        if($id=="all" || $id=="ALL"){
            $sql = Conexion::connect()->prepare("
            SELECT *, nombre_region, id_region FROM region WHERE id_region > '0';
            ");
            
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            echo json_encode( $sql->fetchAll()  );
            exit();
        }else{
            $sql = Conexion::connect()->prepare("
            SELECT nombre_region, id_region FROM region WHERE id_region = :id;
            ");

            $sql->bindValue(':id', $id);
            $sql->execute();
            echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
            exit();
        }
    }

}