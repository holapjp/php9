<?php 
	require_once "class.php"
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar Registros con PHP POO</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body onclick="limpiar()">
	<div class="container row mx-auto">
		<div class="col">
			<h1 class="text-center">ACTIVIDAD PDO9</h1>
			<form action="ingresar.php" method="post">
				<table class="table table-bordered">
					<thead>
						<th>Su nombre</th>
						<th>Ingrese su comentario</th>
						<th>Guardar</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" class="form-control" required>
							</td>
							<td>
								<textarea name="comentario" rows="5" class="form-control"></textarea>
							</td>
							<td>
								<button class="btn btn-primary" type="submit" onclick="validar();">Guardar</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
	<div class="container mx-auto">
		<table class="table table-bordered">
			<thead>
				<th>Nombre</th>
				<th>Comentario</th>
				<th>Fecha</th>
				<td>Opciones</td>
			</thead>
			<tbody>
				<?php 
					$c = new Conectar();
					$datos = $c->getComentarios();
				 ?>
				<tr>
					<td><?= $datos["nombre"] ?></td>
					<td><?= $datos["comentario"] ?></td>
					<td><?= $datos["fecha"] ?></td>
					<td>
						<a href="#" class="btn btn-warning btn-sm text-white">Editar</a>
						<a href="#" class="btn btn-danger btn-sm">Eliminar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>