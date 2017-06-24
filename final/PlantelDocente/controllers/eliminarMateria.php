<?php
include("../bd/connection.php");

$sigla = $_POST['sigla'];


$sql = "DELETE FROM materia WHERE sigla = '$sigla'";
if (mysqli_query($conn, $sql)) {
    echo "Succesfully Deleted : '$sigla'";
    header("Location: ../views/gestionarMaterias.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();
?>
