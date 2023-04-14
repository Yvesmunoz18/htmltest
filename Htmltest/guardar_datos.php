<?php

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root@localhost";
$password = "";
$dbname = "test_mental";

// Crea la conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Recoge los valores del formulario
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];

// Crea la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO test_bienestar (answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10)
VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10')";

// Ejecuta la consulta SQL y verifica si fue exitosa
if (mysqli_query($conn, $sql)) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al guardar los datos: " . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);

?>
