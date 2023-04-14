<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root@localhost";
$password = "";
$database = "test_mental";

$conexion = mysqli_connect($host, $user, $password, $database);

// Verificar si la conexión es exitosa
if (!$conexion) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Recibir los datos del formulario
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
// ...
$answer10 = $_POST["answer10"];

// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO answers (answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10)
VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10')";

// Ejecutar la consulta
if (mysqli_query($conexion, $sql)) {
  echo "Datos insertados en la base de datos";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
