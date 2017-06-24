<?php
    include("../bd/connection.php");
    $sentence = "SELECT * FROM docente";
    $result = $conn->query($sentence);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        $ci = $row['ci'];
        $nombre =  $row['nombre'];
        $apellido = $row['apellido'];
        echo "<tr>
              <td>$ci</td>
              <td>$nombre</td>
              <td>$apellido</td>
              <td>
              <form class='ui form' action='../views/verDocente.php'>
                <input name='ci' type='hidden' value=\"$ci\">
                  <button type='submit' class='ui yellow button'><i class='unhide icon'></i> Ver</button>
                </form>
              </td>
              <td>
                <form class='ui form' action='../views/editarDocente.php'>
                  <input name='ci' type='hidden' value=\"$ci\">
                    <button name='editar_docente' type='submit' class='ui orange button'><i class='write icon'></i> Editar</button>
                  </form>
                </td>";
      }
    }
    else {
      echo "<h5> No hay docentes registrados </h5>";
    }
    $conn->close();
?>
