<?php
include("../bd/connection.php");

$ci = $_POST['docente'];
$nombre = $_POST['materia'];

$sql = "INSERT INTO materiasDictadas (ci,nombre)
VALUES ('$ci','$nombre')";


if ($conn->query($sql) === TRUE) {
  header("Location: ../views/gestionarMaterias.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
