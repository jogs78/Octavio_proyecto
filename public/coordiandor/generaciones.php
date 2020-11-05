<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
.nav-link[data-toggle].collapsed:before {
    content: " ▾";
}
.nav-link[data-toggle]:not(.collapsed):before {
    content: " ▴";
}
</style>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">
            <ul class="nav flex-column flex-nowrap overflow-hidden">
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Overview</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Reports</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                            <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-compass"></i> Areas </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>
            </ul>
        </div>
        <div class="mx-auto" style="width: 600px;">

        <div class="col-sm-10">
        <div class="card border-primary mb-6" style="max-width: 30rem;">
  <div class="card-header">DASHBOARD</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Estadisticas de una generacion</h5>
 
  </div>
</div>
<br>

<div class="container">

<div class="mx-auto" style="width: 600px;">
<div class="card-columns">
<div class="col-sm-0">

  <div class="card " style="width:200px" >
    <img class="card-img-top" src="imagenes/grafica_lineal.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="#" class="btn btn-primary">Usuarios</a>
    </div>
  </div>
  <br>

  <div class="card" style="width:200px" >
    <img class="card-img-top" src="/imagenes/check.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="#" class="btn btn-primary">Rubricas</a>
    </div>
  </div>
  <br>


  <div class="card" style="width:200px">
    <img class="card-img-top" src="imagenes/excel.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="vistas/generaciones.php" class="btn btn-primary">Generaciones</a>
    </div>
  </div>
  <br>


  <div class="card" style="width:200px">
    <img class="card-img-top" src="imagenes/meta.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="#" class="btn btn-primary">Compromisos</a>
    </div>
  </div>
  <br>


 


 
  </div>  </div>


</div>

<br>

</body>


<html>

