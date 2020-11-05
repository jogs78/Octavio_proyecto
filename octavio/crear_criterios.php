<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="author" content="Innoweb - Peterson F.">

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

  </head>

  <body>
  <style>
body {
  background-image: url('imagenes/fondo_index.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<br>
<br>
<br>

  <div class="container" style="width: 48rem;">
   <h1 class="formuh1">Formulario de rubricas</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-9">
        <label>Rubrica</label> 
        <select class="mdb-select md-form">
        <option value="" disabled selected>Listar rubricas</option>
        <option value="1"></option>
        <option value="2"></option>
      </select> 


      <div><br>
        <label>Titulo</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" /> 
        </div>

       </div>
        <div class="col-lg-8"><label>Descripcion</label> 
         <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
        </div>
         <div class="col-lg-12">
    
  </div>

  <button class="btn btn-success pull-right" type="submit">Agregar</button>
  
      </div>
      
    </form>
    <div class="col-lg-14">

    <a class = "btn btn-primary"  href="rubricas.php" role = "button">Regresar</a>

  </div>
  

  </body>
</html>