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


//Cargo los datos de temepratura y humedad provenientes de cada sala//
if(isset($_GET['temp']) && isset($_GET['hum']) && isset($_GET['sala'])){
  //Sala1
  if($_GET['sala']==1){
    //http://localhost/ControlHumTemp/index.php?temp=45&hum=90&sala=1
    //http://localhost:3333/index.php?temp=18&hum=91&sala=1
    $temperatura = $_GET['temp'];
    $humedad = $_GET['hum'];
    echo "La temperatura es: ".$temperatura." <br>La humedad es: ".$humedad."<br>";
    $respuesta = ControladorDatos::ctrlCargarDatosS1($temperatura, $humedad);
    echo $respuesta;
    exit;
  }
  //Sala2
  if($_GET['sala']==2){
    //http://localhost/ControlHumTemp/index.php?temp=18&hum=91&sala=2
    //http://localhost:3333/index.php?temp=18&hum=91&sala=2
    $temperatura = $_GET['temp'];
    $humedad = $_GET['hum'];
    echo "La temperatura es: ".$temperatura." <br>La humedad es: ".$humedad."<br>";
    $respuesta = ControladorDatos::ctrlCargarDatosS2($temperatura, $humedad);
    echo $respuesta;
    exit;
  }
}

$ruta = ControladorRuta::ctrRuta();
$servidor = ControladorRuta::ctrServidor();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tablero General</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/vistas/plugins/css/adminlte.min.css">
  <!-- bootstrap switch-->
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"rel="stylesheet"/>
  <!-- uPlot -->
  <link rel="stylesheet" href="/vistas/plugins/uplot/uPlot.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed
  <?php
  if (isset($_GET["pagina"])){
    if( 
        $_GET["pagina"] != "seleccioncurvas" &&
        $_GET["pagina"] != "online"
      ) {
        echo "dark-mode";
      }
    }else{
      echo "dark-mode";
    }
  ?>
">
  <div class="wrapper">

  <?php
    include "paginas/modulos/preloader.php";
    include "paginas/modulos/Navbar.php";
    include "paginas/modulos/mainSideBar.php";

    //lista blanca de paginas internas
    if (isset($_GET["pagina"])){
      if( $_GET["pagina"] == "tablero" ||
          $_GET["pagina"] == "sala1" ||
          $_GET["pagina"] == "sala2" ||
          $_GET["pagina"] == "online" ||
          $_GET["pagina"] == "seleccioncurvas"
        ) {
            
      //error_log("redirigue a: "."paginas/" . $_GET["pagina"] . ".php", 0);
      include "paginas/" . $_GET["pagina"] . ".php";
      }
  }


    include "paginas/modulos/footer.php";

    
    
  ?>



  </div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/vistas/js/adminlte.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/vistas/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/vistas/plugins/raphael/raphael.min.js"></script>
<script src="/vistas/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/vistas/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/vistas/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="/vistas/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/vistas/js/dashboard2.js"></script>
<!-- FLOT CHARTS -->
<script src="/vistas/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/vistas/plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/vistas/plugins/flot/plugins/jquery.flot.pie.js"></script>
<script src="/vistas/js/chartsjs.js"></script>
<!-- Bootstrap Switch -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<!-- uPlot -->
<script src="/vistas/plugins/uplot/uPlot.iife.min.js"></script>
<script src="/vistas/js/uplot.js"></script>
</body>
</html>

*/