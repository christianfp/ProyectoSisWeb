<?php
include("../bd/connection.php");

$sigla = $_POST['sigla'];
$nombre = $_POST['nombre'];

$sql = "INSERT INTO materia (sigla, nombre)
VALUES ('$sigla', '$nombre')";

if($sigla!=null &&  $nombre!=null && strlen($sigla)<46 && strlen($nombre)<46)
{
    if ($conn->query($sql) === TRUE) {
    header("Location: ../views/gestionarMaterias.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else {
  header("Location: ../views/registrarMateriaError.php");
}

$conn->close();
?>
