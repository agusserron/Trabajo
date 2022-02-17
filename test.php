<!DOCTYPE html>
<html lang="es">
<html>
    <head>
    <LINK REL=StyleSheet HREF="css/testEstilo.css" TYPE="text/css" MEDIA=screen>
    <script src="js/testFuncionalidad.js"> </script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

  

</head>
<img src="img/logo.jpg">
<h1>Formulario Metadatos</h1>

<ul>
<li><a class="active" href="test.php">Agregar</a></li>
  <li><a class="active" href="busqueda.php">Busqueda</a></li>
  
</ul>

<body>
<div class="box">
<form action="formpost.php" method="post" onsubmit="return validar();"> 


<div class="mb-3">
  <label for="titulo" class="form-label">Título:</label>
  <input type="text" class="form-control" id="titulo">
</div>

<div class="mb-3">
    <label for="id" class="form-label">ID:</label>
    <input type="text" class="form-control" id="id">
  </div>

  <div class="mb-3">
  <label for="descripcion" class="form-label">Descripción:</label>
  <textarea class="form-control" id="descripcion" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="proposito" class="form-label">Propósito de generación:</label>
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
    <div class="mt-4">
    <input class="btn" type="submit" value="Enviar">
    </div>
</form>
</body>

 <!--Conexion a base de datos -->


<?php //COMO MOSTRAR DATOS DE LA BASE DE DATOS 
/*$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$sql = "SELECT * FROM metadato";
foreach ($pdo->query($sql) as $row) {
   echo $row['titulo'] . "<br />";
   echo "Descripcion " . $row['descripcion'] . "<br />";
}
//INSERTAR DATOS 
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$sql = "INSERT INTO users (forename, surname, email, password) 
VALUES ('Paddy', 'Irish', 'paddy@irish.com', 'qaywsx')";
if ($pdo->exec($sql) === 1)
  echo "New record created successfully";
*/
?>


</html>


