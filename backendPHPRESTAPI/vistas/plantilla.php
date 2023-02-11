<?php

$ruta = ControladorRuta::ctrRuta();
$servidor = ControladorRuta::ctrServidor();

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

  //muestro publicación en particular
  if (isset($_GET['id'])){
    //ver ("ctrlMostrarTwit");
    $respuesta = ControladorPublicacion::ctrlConsultarTwit($_GET['id']);
    header("HTTP/1.1 200 OK");
    echo $respuesta;
    exit;  
  }

  //muestro regiones
  if (isset($_GET['region'])){
    
    $respuesta = ControladorRegion::ctrlConsultarRegion($_GET['region']);
    header("HTTP/1.1 200 OK");
    echo $respuesta;
    exit; 
  }

  //muestro categorias
  if (isset($_GET['categoria'])){
    
    $respuesta = ControladorCategoria::ctrlConsultarCategoria($_GET['categoria']);
    header("HTTP/1.1 200 OK");
    echo $respuesta;
    exit; 

  //Sin parámetros envío todas las publicaciones
  }else{
    
    $respuesta = ControladorPublicacion::ctrlConsultarAllTwits();
    header("HTTP/1.1 200 OK");
    echo $respuesta;
    exit;
  }
}

// Crear un nuevo post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    echo json_encode($input);
    exit();
    
    $sql = "INSERT INTO posts
          (title, status, content, user_id)
          VALUES
          (:title, :status, :content, :user_id)";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();

    if($postId)
    {
      $input['id'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
	 }
}


header("HTTP/1.1 400 Bad Request");

/*

*/
