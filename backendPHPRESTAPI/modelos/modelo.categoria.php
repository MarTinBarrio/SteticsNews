<?php

require_once "conexion.php";

Class ModeloCategoria{

    static public function mdlConsultarCategoria($id){
        if($id=="all" || $id=="ALL"){
            $sql = Conexion::connect()->prepare("
            SELECT *, nombre_categoria, id_categoria FROM categoria WHERE id_categoria > '0';
            ");
            
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            echo json_encode( $sql->fetchAll()  );
            exit();
        }else{
            $sql = Conexion::connect()->prepare("
            SELECT nombre_categoria, id_categoria FROM categoria WHERE id_categoria = :id;
            ");

            $sql->bindValue(':id', $id);
            $sql->execute();
            echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
            exit();
        }
    }

}


