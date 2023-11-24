<?php
ob_start();
     session_start();
    
    if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../erro404.php');
  }
?>
<?php if(isset($_SESSION['id'])) { ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>MK FITNESS GYM SRL</title>
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../backend/css/bootstrap.min.css">
         <!----css3---->
        <link rel="stylesheet" href="../../backend/css/custom.css">
        <link rel="stylesheet" href="../../backend/css/loader.css">


          <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
      <link rel="icon" type="image/png" href="../../backend/img/favicon.png"/>
  </head>
  <body>
  
<div class="wrapper">
   
<div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../backend/img/favicon.png" class="img-fluid"/><span>MK FITNESS GYM</span></h3>
            </div>
            <ul class="list-unstyled components">
               <li  class="">
                    <a href="../administrador/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Panel administrativo</span></a>
                </li>
          
               
               
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">group</i><span>Clientes</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="../clientes/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../clientes/nuevo.php">Nuevo</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">dataset</i><span>Planes</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="../plan/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../plan/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="../servicio/mostrar.php"><i class="material-icons">view_timeline</i><span>Servicio</span></a>
                </li>
                    
                     <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">manage_accounts</i>
                    
                         
                         <span>Usuarios</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="../usuario/mostrar.php">Mostrar</a>
                        </li>
                       
                    </ul>
                </li>
                      <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">conveyor_belt</i><span>Productos</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="../producto/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../producto/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
                    
                    <li class="dropdown ">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">category</i><span>Categorias</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li class="">
                            <a href="../categoria/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../categoria/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
               
                  
                  
                  <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">point_of_sale</i><span>Ventas</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="../venta/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../venta/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="#pageSubmenu09" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">shopping_basket</i><span>Compras</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu09">
                        <li>
                            <a href="../compra/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../compra/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu010" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">savings</i><span>Gastos</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu010">
                        <li>
                            <a href="../gastos/mostrar.php">Mostrar</a>
                        </li>
                        <li>
                            <a href="../gastos/nuevo.php">Nuevo</a>
                        </li>
                    </ul>
                </li>
               
                  
                    <li class="dropdown active">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">signal_cellular_alt</i><span>Reportes</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li class="active">
                            <a href="../reporte/productos.php">Productos</a>
                        </li>
                        <li>
                            <a href="../reporte/clientes.php">Clientes</a>
                        </li>
                        <li class="">
                            <a href="../reporte/ventas.php">Ventas</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="../graficos/mostrar.php"><i class="material-icons">grain</i><span>Graficos</span></a>
                </li>
               <li class="">
                    <a href="../cuenta/configuracion.php"><i class="material-icons">settings</i><span>Configuracion</span></a>
                </li>
                   
            </ul>

        </nav>
          
        <!-- Page Content  -->
        <div id="content">
          <div class='pre-loader'>
    <img class='loading-gif' alt='loading' src="https://media.giphy.com/media/TPFdnUyWNNQYMke6gU/giphy.gif"/>
</div>
          <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
                         
                         <a class="navbar-brand" href="#"> Reporte de productos </a>
                         
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">  
                         <li class="nav-item">
                                <a class="nav-link" href="../cuenta/configuracion.php">
                                        <span class="material-icons">settings</span>
                                        </a>
                            </li> 
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   
                                   <img src="../../backend/img/reere.png" >
                                           
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../cuenta/perfil.php">Mi perfil</a>
                                    </li>
                                    <li>
                                        <a href="../cuenta/salir.php">Salir</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
         </div>
               
               
               <div class="main-content">
               <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../administrador/escritorio.php">Panel administrativo</a></li>
    <li class="breadcrumb-item"><a href="../reporte/productos.php">Reporte </a></li>
    <li class="breadcrumb-item active" aria-current="page">Reporte de productos por graficos</li>
  </ol>
</nav>
<a href="../reporte/filtro-producto.php" class="btn btn-danger text-white"
                            >Mostrar filtro</a>
                            <br>
                        <div class="row ">
                            <div class="col-lg-4 col-md-4">
                                <div class="card" style="min-height: 485px">
                                    
                                     <div class="card-header card-header-text">
                                    <h4 class="card-title">Productos</h4>
                                </div>
                                   <div class="card-content">
                                  <div id="piechart"  class="tcentrado"></div>  
                                </div> 
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="card" style="min-height: 485px">
                                   
                                    <div class="card-header card-header-text">
                                    <h4 class="card-title">Productos por stock</h4>
                                </div>
                                   <div class="card-content">
                                  <div id="piechart1"  class="tcentrado"></div>  
                                </div> 
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="card" style="min-height: 485px">
                                    
                                    <div class="card-header card-header-text">
                                    <h4 class="card-title">Productos por precio</h4>
                                </div>
                                   <div class="card-content">
                                  <div id="donutchart"  class="tcentrado"></div>  
                                </div> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                                <div class="card" style="min-height: 485px">
                                    
                                    <div class="card-header card-header-text">
                                    <h4 class="card-title">Productos por entradas</h4>
                                </div>
                                   <div class="card-content">
                                  <div id="entrada"  class="tcentrado"></div>  
                                </div> 
                                </div>
                            </div> 


                            <div class="col-lg-6 col-md-6">
                                <div class="card" style="min-height: 485px">
                                    
                                    <div class="card-header card-header-text">
                                    <h4 class="card-title">Productos por salidas</h4>
                                </div>
                                   <div class="card-content">
                                  <div id="salida"  class="tcentrado"></div>  
                                </div> 
                                </div>
                            </div>  
                        </div>
                      

                         </div>

        </div>
    </div>

  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../../backend/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../backend/js/popper.min.js"></script>
   <script src="../../backend/js/bootstrap.min.js"></script>
   <script src="../../backend/js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
            });
               
                $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
               
        });

</script>
<script src="../../backend/js/loader.js"></script>
<script src="../../backend/js/reenvio.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="../../backend/js/chart/Chart.js"></script>
        <script>
            google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Articulo', 'Stock'],  
                         
                          
                          <?php
                        require '../../backend/bd/ctconex.php';
        $stmt = $connect->prepare("SELECT producto.idprod, producto.codba, producto.nomprd, categoria.idcate, categoria.nomca, producto.precio, producto.stock, producto.foto, producto.venci, producto.esta, producto.fere FROM producto INNER JOIN categoria ON producto.idcate = categoria.idcate");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        while($row = $stmt->fetch()) { 
            echo "['".$row['nomprd']."', ".$row['stock']."],";
        }

            ?>
             ]);  
                var options = {  
                     
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
        </script>
        <script type="text/javascript">
  google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Articulo', 'Stock'],
    <?php
      
        $stmt = $connect->prepare("SELECT producto.idprod, producto.codba, producto.nomprd, categoria.idcate, categoria.nomca, producto.precio, producto.stock, producto.foto, producto.venci, producto.esta, producto.fere FROM producto INNER JOIN categoria ON producto.idcate = categoria.idcate");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        while($row = $stmt->fetch()) { 
            echo "['".$row['nomprd']."', ".$row['stock']."],";
        }

            ?>
 ]);

  var options = {
    
    hAxis: {title: 'Articulo', minValue: 0, maxValue: 3},
    vAxis: {title: 'Stock', minValue: 0, maxValue: 2100},
    trendlines: {
      0: {
        type: 'exponential',
        visibleInLegend: true,
      }
    }
  };

  var chart = new google.visualization.ScatterChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Articulo', 'Precio'],
         <?php

        $stmt = $connect->prepare("SELECT producto.idprod, producto.codba, producto.nomprd, categoria.idcate, categoria.nomca, producto.precio, producto.stock, producto.foto, producto.venci, producto.esta, producto.fere FROM producto INNER JOIN categoria ON producto.idcate = categoria.idcate");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        while($row = $stmt->fetch()) { 
            echo "['".$row['nomprd']."', ".$row['precio']."],";
        }

            ?>
        ]);

        var options = {
        
          hAxis: {title: 'Articulo', minValue: 0, maxValue: 15},
          vAxis: {title: 'Precio', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('donutchart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Articulo', 'Precio'],
         <?php

        $stmt = $connect->prepare("SELECT compra.idcomp, compra.user_id, compra.method, compra.total_products, compra.total_price, compra.placed_on, compra.payment_status, compra.tipc FROM compra");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        while($row = $stmt->fetch()) { 
            echo "['".$row['total_products']."', ".$row['total_price']."],";
        }

            ?>
        ]);

        var options = {
        
          hAxis: {title: 'Articulo', minValue: 0, maxValue: 15},
          vAxis: {title: 'Precio', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('entrada'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Articulo', 'Precio'],
         <?php

        $stmt = $connect->prepare("SELECT orders.idord, orders.user_id, clientes.idclie,clientes.numid, clientes.nomcli, clientes.apecli, clientes.celu, orders.method, orders.total_products, orders.total_price, orders.placed_on, orders.payment_status, orders.tipc FROM orders INNER JOIN clientes on orders.user_cli = clientes.idclie");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        while($row = $stmt->fetch()) { 
            echo "['".$row['total_products']."', ".$row['total_price']."],";
        }

            ?>
        ]);

        var options = {
        
          hAxis: {title: 'Articulo', minValue: 0, maxValue: 15},
          vAxis: {title: 'Precio', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('salida'));

        chart.draw(data, options);
      }
    </script>
  </body>
  </html>





<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>     