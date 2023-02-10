<?php
require_once "include/auxiliares.php";
require_once "include/config.php";

Class Conexion {
    static public function connect(){

      try {
          
        $link = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_ENCODE, DB_USERNAME, DB_PASSWORD);
         
        // set the PDO error mode to exception
        /* $link = new PDO("mysql:host=localhost;dbname=steticnews",
                        "root",
                        ""); */

        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
        return $link;
          
      } catch (PDOException $exception) {
          exit($exception->getMessage());
      }
  }
  
    //Obtener parametros para updates
    static public function getParams($input){

        $filterParams = [];
        foreach($input as $param => $value){
            $filterParams[] = "$param=:$param";
        }
        return implode(", ", $filterParams);
	}

    //Asociar todos los parametros a un sql
	static public function bindAllValues($statement, $params){
            
        foreach($params as $param => $value){
            $statement->bindValue(':'.$param, $value);
        }
        return $statement;
    }
            
}
