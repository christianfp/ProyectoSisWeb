<?php
include("../bd/connection.php");

$sql = "SELECT * FROM docente WHERE estado_laboral='activo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="ui segment">
      <div class="ui two column grid">
        <div class="row">
          <div class="four wide column">
            <img class="ui small image" src="../controllers/fotos/<?php echo $row["nombre_foto"] ?>">
          </div>
          <div class="twelve wide column">
            <a href="../views/verDocente.php?ci=<?php echo $row['ci']; ?>" class="ui header" >
              <?php echo $row["nombre"]." ".$row["apellido"]; ?>
            </a>
            </br>
              <strong>Formaci&oacute;n Académica:</strong>
              <?php
                $formacion_academica = $row["formacion_academica"];
                if (strlen($formacion_academica)>200){
                  $texto_corto = substr($formacion_academica, 0, 200);
                  $formacion_academica = substr($texto_corto, 0, strrpos($texto_corto, ' ')).' . . .';
                }
                echo $formacion_academica;
              ?>

          </br>
              <strong>Historial de Trabajo:</strong>
              <?php
                $historial_trabajo = $row["historial_trabajo"];
                if (strlen($historial_trabajo)>200){
                  $texto_corto = substr($historial_trabajo, 0, 200);
                  $historial_trabajo = substr($texto_corto, 0, strrpos($texto_corto, ' ')).' . . .';
                }
                echo $historial_trabajo;
              ?>
          </br>
              <strong>Materias Dictadas:</strong>

              <?php
              $ci= $row["ci"];
              $sql = "SELECT * FROM materiasDictadas WHERE ci=$ci";
              $materias="";
              $results = $conn->query($sql);

                if ($results->num_rows > 0) {
                    // output data of each row
                    while($rows = $results->fetch_assoc()) {
                      $materias=$materias.$rows["nombre"]. ', ';
                    }
                    $materias = trim($materias, ', ').'.';
                    echo $materias;
                  }



              ?>
          </div>
          </div>
        </div>
      </div>
    <!--Fin Docente-->







 <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
