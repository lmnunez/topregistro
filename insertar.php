<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["nombre"]) || !isset($_POST["correo"]) || !isset($_POST["contrasena"]) || !isset($_POST["celular"]) || !isset($_POST["edad"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$celular = $_POST["celular"];
$edad = $_POST["edad"];


$sentencia = $base_de_datos->prepare("INSERT INTO registro(nombre, correo, contrasena, celular, edad) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $correo, $contrasena, $celular, $edad]); 

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
