<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola aqui probando</title>
</head>
<body>
<h1>Hola aqui inovando</h1>

<!--Aqui agregare un poco de código para hacer un cambio llamado Cambio N2-->
<center>

<div class="section container">

<form action="prueba.php" method="POST">

<div class ="row">
<form class="col s12">

<div class ="row card-panel">

<div class="input-field col s6">
<input type="text"  id="nombre"name="txt_nombre"  class="validete" required>
<label for="nombre">Nombre:</label>
</div>


<div class="input-field col s6">
<input type="text"  id="apellido"name="txt_apellido" class="validete" required>
<label for="apellido">Apellido:</label>
</div>


<div class="input-field col s6">
<input type="date"  id="fecha_de_nacimiento"name="txt_fecha"  class="validete" required>
<label for="fecha_de_nacimiento">Fecha de nacimiento</label>
</div>


<div class="input-field col s6">
<input type="text"  id="sexo"name="txt_sexo"  class="validete" required>
<label for="sexo">Sexo M/F</label>
</div>

<button class="btn" type="submit">Enviar</button>
</div> 
</form>
</div>
</div>
</center>
</body>
</html>