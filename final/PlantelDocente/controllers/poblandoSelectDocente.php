<?php
include("../bd/connection.php");

$sql = "SELECT * FROM docente WHERE estado_laboral='activo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

  <select class="ui fluid dropdown" name="docente">
      <?php
      while($row = $result->fetch_assoc()) {
      ?>
        <option value="">Seleccione un docente</option>
      	<option value="<?php echo $row['ci'];?>"><?php echo $row["nombre"]." ".$row["apellido"]; ?></option>
      <?php
      }
      ?>
  </select>
<?php
}
?>

<script>
  $(document).ready(function (){
    $('.ui.dropdown').dropdown();
  });
</script>
