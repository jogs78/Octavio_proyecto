<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="author" content="Innoweb - Peterson F.">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

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
   <h1 class="formuh1">Create_Momento</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-9">
      
      <div><br>
        <label>Nombre</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" /> 
        </div>
        <br>

       </div>
        <div class="col-lg-8">
            <label>Fecha inicio</label> 
        <div class='input-group date' id='datetimepicker1'>
               <input type='text' class="form-control" />
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
            <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
      <br>

<label>Fecha fin</label> 
        <div class='input-group date' id='datetimepicker1'>
               <input type='text' class="form-control" />
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
            <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>

    
  </div></div>

  <button class="btn btn-success pull-right" type="submit">Agregar</button>
  

  
      </div>
      <a class = "btn btn-primary"  href="rubricas.php" role = "button">Regresar</a>

      <div class="col-lg-7">

      
          

    </form>
    </div>

  



  

  </body>
</html>
