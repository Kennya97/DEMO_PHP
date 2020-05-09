<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otro cambio</title>
</head>
<body>
<!--Aqui modifique garcia.php y al commit lo llamare Si lo logre-->
<h1>Hola aqui cambiando unn poco</h1>
<?php
class Empleado{
var $Nombre;
var $Apellido;
var $Fecha_de_nacimiento;
var $Sexo;

function Empleado()   //METODO CONSTRUCTOR
{
$this->Nombre = "";
$this->Apellido= "";
$this->Fecha_de_nacimiento = "";
$this->Sexo = "";

}

function Agregar()
{
echo "Se Agrego Correctamente";
}
function Modificar()
{
echo "Se modico Correctamente";
}
function Eliminar()
{
echo "Se Elimino Correctamente";
}

function Consultar()
{
echo "Se consulto exitosamente";
}
}
new Empleado();
?>
</body>
</html>