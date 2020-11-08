<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="author" content="Innoweb - Peterson F.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">

  </head>

  <body>
  <style>
body {
  background-image: url('../imagenes/fondo_index.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<br>


  <div class="container" style="width: 70rem;">
   <h1 class="formuh1">Main_estudiante_02</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-12">

  <a href="#">
<img src="../imagenes/baucher.png" style="height: 50px;"/>
</a>
        <label>Proyecto</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" />


<br>

<div style="margin: 0px 0px 0px 360px;">
<a class = "btn btn-primary "  href="#" role = "button">Someter / Modificar</a>
  <a class = "btn btn-primary "  href="#" role = "button">Regresar</a>
  </div>

    </form>
  <br>

</div>
<br>

  </body>
</html>