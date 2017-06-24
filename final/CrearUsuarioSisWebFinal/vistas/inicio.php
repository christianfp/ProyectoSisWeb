<?php 
	$controlador = new ControladorUsuarios();
	$resultado = $controlador->index();
?>
<html>
<style>
h3 { text-align: center}
</style>

<h3>Usuarios</h3>
<div style="text-align:center;">

<table border="1", WIDTH=40% , style="margin: 0 auto;">
	<thead>
		<th>Id</th>
		<th>Usuario</th>
		<th>Tipo</th>


	</thead>
	<tbody>

		<?php while ($row = mysql_fetch_array($resultado)): ?>
			<tr>	
				
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['user_name'] ?></td>
				<td><?php echo $row['type'] ?></td>
				<td>
					<a href="?cargar=eliminar&id=<?php echo $row['id']; ?>">Eliminar</a>
				</td>

			</tr>
		<?php endwhile; ?>
	</tbody>
</table>
</div> 
</html>
