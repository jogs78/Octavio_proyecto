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


  <div class="container" style="width: 60rem;">
   <h1 class="formuh1">Asignar asesor</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row" >
       <div class="col-lg-12">
  
        <label>Proyecto</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" />
        <label>Estudiante</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" /> 
        <label>Hipotesis</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" /> 
        <label>Objetivo Gral</label> <input  id="Nombre" class="form-control" type="text" name="Nombre" />  
      
        <label>Objetivo espesifico</label> 
         <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
  

<br>
<div>
<label>Asesor:</label> 
<select class="mdb-select md-form bg-primary text-white text-center py-2 btn-block">
        <option value="" disabled selected> </option>
        <option value="1">Jorge</option>
        <option value="2">Hector</option>
        <option value="3">Juan</option>
        <option value="4">Francisco</option>
        <option value="5">Rocio</option>
        <option value="6">Pedro</option>

      </select> 
</div>
<br>


<div>
<label>Revisor 1: </label> 
<select class="mdb-select md-form bg-primary text-white text-center py-2 btn-block">
        <option value="" disabled selected> </option>
        <option value="1">Jorge</option>
        <option value="2">Hector</option>
        <option value="3">Juan</option>
        <option value="4">Francisco</option>
        <option value="5">Rocio</option>
        <option value="6">Pedro</option>
      </select> 
</div>
<br>


<div>
<label>Revisor 2: </label> 
<select class="mdb-select md-form bg-primary text-white text-center py-2 btn-block">
        <option value="" disabled selected> </option>
        <option value="1">Jorge</option>
        <option value="2">Hector</option>
        <option value="3">Juan</option>
        <option value="4">Francisco</option>
        <option value="5">Rocio</option>
        <option value="6">Pedro</option>
      </select> 
</div>
<br>


<div>
<label>Revisor 3: </label> 
<select class="mdb-select md-form bg-primary text-white text-center py-2 btn-block">
        <option value="" disabled selected></option>
        <option value="1">Jorge</option>
        <option value="2">Hector</option>
        <option value="3">Juan</option>
        <option value="4">Francisco</option>
        <option value="5">Rocio</option>
        <option value="6">Pedro</option>
      </select> 
</div>
<br>


<div>
<label>Revisor 4: </label> 
<select class="mdb-select md-form bg-primary text-white text-center py-2 btn-block">
        <option value="" disabled selected> </option>
        <option value="1">Jorge</option>
        <option value="2">Hector</option>
        <option value="3">Juan</option>
        <option value="4">Francisco</option>
        <option value="5">Rocio</option>
        <option value="6">Pedro</option>
      </select> 
</div>
<br>

  <button class="btn btn-primary  btn-block" type="submit">Asignar</button>
  
      </div></div>
      
    </form>
  <br>
  <div>

<a class = "btn btn-primary"  href="proyectos.php" role = "button">Regresar</a>

</div>
<br><br><br>

  </body>
</html>