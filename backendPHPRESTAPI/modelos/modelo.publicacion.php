<?php

require_once "conexion.php";

Class ModeloPublicacion{

    /*******
     * mostrar datos ultimas 24hs.
     */
    static public function mdlConsultarTwit($id){

            //Mostrar un twit
        
        $sql = Conexion::connect()->prepare("
        SELECT p.contenido_publicacion,  p.creation_date, p.etiquetas, p.links, r.nombre_region, c.nombre_categoria
        from publicacion AS p LEFT JOIN region AS r ON (p.id_region = r.id_region)
        INNER JOIN categoria AS c ON c.id_categoria  = p.id_categ
        WHERE p.id = :id;
        ");

        $sql->bindValue(':id', $id);
        $sql->execute();
        echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
        exit();
    }

    static public function mdlConsultarAllTwits(){
	    
        //Mostrar lista de twits
        $sql = Conexion::connect()->prepare("
        SELECT p.contenido_publicacion, p.creation_date, p.etiquetas, p.links, r.nombre_region, c.nombre_categoria
        from publicacion AS p LEFT JOIN region AS r ON (p.id_region = r.id_region)
        INNER JOIN categoria AS c ON c.id_categoria  = p.id_categ
        WHERE p.id > '0';
        ");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        echo json_encode( $sql->fetchAll()  );
        exit();
	}

    static public function mdlAgregarTwit(){
	    
        
        $sql = Conexion::connect()->prepare("
        INSERT INTO publicacion (contenido_publicacion, etiquetas, id_categ, id_region, links)
        VALUES ('ergegergergerorfoerfwerfokwrmpocfw', '{'maquinas', 'salud', 'tecnologia'}', '2', NULL, '{'www.infobae.com','www.clarin.com'}');
        ");
        $sql->bindValue(':id', $id);
        $sql->execute();
        echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
        exit();
	}
}