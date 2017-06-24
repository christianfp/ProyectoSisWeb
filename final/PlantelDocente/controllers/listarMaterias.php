<?php
include("../bd/connection.php");

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $codigo = $row['codigo'];
        $sigla = $row['sigla'];
        $nombre = $row['nombre'];


        echo "<tr>
            <td>$sigla</td>
            <td>$nombre</td>
            <td>
            <form class='ui form' method = 'post' action = '../views/editarMateria.php'>
              <input name = 'codigo' type = 'hidden' value = \"$codigo\">
              <input name = 'sigla' type = 'hidden' value = \"$sigla\">
              <input name = 'nombre' type = 'hidden' value = \"$nombre\">
              <button type='submit' class='ui orange button'><i class='write icon'></i> Editar</button>
            </form>
            </td>
            <td>
            <form class='ui form' method = 'post' action = '../controllers/eliminarMateria.php'>
              <input name = 'sigla' type = 'hidden' value = \"$sigla\">
              <button type='submit'class= 'ui centered red button'><i class='remove icon'></i> Eliminar</button>
            </form>
            </td>";
    }
} else {
    echo "<h5> No hay materias registradas </h5>";
}
$conn->close();
?>
