<?php 

	$controlador = new ControladorUsuarios();
	$resultado = $controlador->index();

	$host2 = "localhost";
	$user2 = "root";
	$pass2 = "mysql";
	$bd2 = "sisWebdb";

	$con2 = mysql_connect($host2, $user2, $pass2);

		if ($con2)
			mysql_select_db($bd2, $con2);


	$sql2 = "SELECT * FROM historicos";

	$resultado2 = mysql_query($sql2);

?>
<html>
<style>
h3 { text-align: center}
</style>

<h3>Sesiones Iniciadas</h3>
<div style="text-align:center;">

<table border="1", WIDTH=40% , style="margin: 0 auto;">
	<thead>
		<th>Fecha</th>
		<th>Mensaje</th>
	</thead>
	<tbody>
		<?php while ($row = mysql_fetch_array($resultado2)): ?>
			<?php 
				echo "<tr>";
				echo "<th>".$row['fecha']."</th>";
				echo "<th>".$row['mensaje']."</th>";
				echo "<tr/>";
			?>
		<?php endwhile; ?>
	</tbody>
</table>
</div> 
</html>
