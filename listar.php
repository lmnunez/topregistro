<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select id, nombre, correo, celular, edad from registro");
$registros = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "encabezado.php" ?>
<div class="row">

	<div class="col-12">
		<h1>Listar Registros</h1>
		<a href="" target="_blank"></a>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Celular</th>
						<th>Edad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach($registros as $registro){ ?>
						<tr>
							<td><?php echo $registro->id ?></td>
							<td><?php echo $registro->nombre ?></td>
							<td><?php echo $registro->correo ?></td>
							<td><?php echo $registro->celular ?></td>
							<td><?php echo $registro->edad ?></td>
							<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $registro->id?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $registro->id?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once "pie.php" ?>