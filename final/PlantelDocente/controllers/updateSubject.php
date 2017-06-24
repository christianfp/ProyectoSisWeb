<?php
include("../bd/connection.php");

$codigo = $_POST["codigo"];
$sigla = $_POST["sigla"];
$nombre = $_POST["nombre"];

$sql = "UPDATE materia SET sigla = '$sigla', nombre = '$nombre' WHERE codigo = '$codigo'";

if($sigla!=null &&  $nombre!=null && strlen($sigla)<46 && strlen($nombre)<46)
{
  if ($conn->query($sql) === TRUE) {
    header("Location: ../views/gestionarMaterias.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else {
  header("Location: ../views/editarMateriaError.php");
}

$conn->close();
?>
