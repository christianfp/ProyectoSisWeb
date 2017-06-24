<?php
include("../bd/connection.php");

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

<select class="ui fluid dropdown" name="materia">
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
      <option value="">Seleccione una materia</option>
    	<option value="<?php echo $row['nombre'];?>">
    		<?php echo $row["nombre"]; ?>
    	</option>
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
