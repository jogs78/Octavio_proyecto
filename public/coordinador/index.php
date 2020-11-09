<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<style>
  
  .html,body{
       /* Para que funcione correctamente en Smartphones y Tablets */
       height:100vh;
  }
  body {
       /* Ruta relativa o completa a la imagen */
       background-image: url(../imagenes/fondo_index.jpg);
       /* Centramos el fondo horizontal y verticalmente */
       background-position: center center;
       /* El fonde no se repite */
       background-repeat: no-repeat;
       /* Fijamos la imagen a la ventana para que no supere el alto de la ventana */
       background-attachment: fixed;
       /* El fonde se re-escala automáticamente */
       background-size: cover;
       /* Color de fondo si la imagen no se encuentra o mientras se está cargando */
       background-color: #FFF;
       /* Fuente para el texto */
       text-align: center;
       color: #000;
       font-family: "Times New Roman", Times, serif;
  }
  </style>
 
<br><br>
<div class="container">
<div class="mx-auto" style="width: 800px;">
<div class="card-columns">
<div class="col-sm-0">

  <div class="card " style="width:200px" >
    <img class="card-img-top" src="../imagenes/perfil.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="#" class="btn btn-primary">Usuarios</a>
    </div>
  </div>
  <br>

  <div class="card" style="width:200px" >
    <img class="card-img-top" src="../imagenes/check.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="rubricas.html" class="btn btn-primary">Rubricas</a>
    </div>
  </div>
  <br>


  <div class="card" style="width:200px">
    <img class="card-img-top" src="../imagenes/excel.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="generaciones.html" class="btn btn-primary">Generaciones</a>
    </div>
  </div>
  <br>


  <div class="card" style="width:200px">
    <img class="card-img-top" src="../imagenes/meta.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="#" class="btn btn-primary">Compromisos</a>
    </div>
  </div>
  <br>


  <div class="card" style="width:200px">
    <img class="card-img-top" src="../imagenes/proyecto.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="proyectos.html" class="btn btn-primary">Proyectos</a>
    </div>
  </div>
  <br>


  <div class="card" style="width:200px">
    <img class="card-img-top" src="../imagenes/conf.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="#" class="btn btn-primary">Configuracion</a>
    </div>
  </div>
  <br>
  </div>
  </div>


</body>
</html>

