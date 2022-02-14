<html>
    <head>
    <LINK REL=StyleSheet HREF="css/testEstilo.css" TYPE="text/css" MEDIA=screen>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/testFuncionalidad.js"> </script>

</head>
<h1>Formulario Metadatos</h1>


<body>
<form action="formpost.php" method="post" onsubmit="return validar();"> 
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Título:</label>
  <input type="text" class="form-control" id="titulo">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID:</label>
    <input type="text" class="form-control" id="id">
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción:</label>
  <textarea class="form-control" id="descripcion" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Propósito de generación:</label>
  <textarea class="form-control" id="proposito" rows="3"></textarea>
</div>
<select class="form-select" aria-label="Default select example">
  <option selected>Estado</option>
  <option value="1">Activo</option>
  <option value="2">Resultado intermedio</option>
  <option value="3">Obsoleto</option>
</select>
<select class="form-select" aria-label="Default select example">
  <option selected>Formato</option>
  <option value="1">SHP</option>
  <option value="2">TIFF</option>
  <option value="3">PNG</option>
  <option value="3">KML</option>
  <option value="3">CSV</option>
</select>


</div>
   

    <input type="submit" value="Enviar">
    
</form>
</body>

 <!--Conexion a base de datos -->
<?php 
$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$modo=$_SERVER['HTTP_HOST']; //localizamos el servidor
//if ($modo=="localhost") { //datos en servidor local
    $servidor="localhost";
    $usuario="root";
    $contrasena="";
    $base="test";
//    }
//else { //datos en servidor web
 //   $servidor="nombre_servidor_web"; 
  // $usuario="nombre_usuario_web";
  //  $contrasena="contraseña_em_web";
  //  $base="nombre_base_web";
   // }

   $mysqli = new mysqli($servidor,$usuario,$contrasena)
    
?>

</html>


