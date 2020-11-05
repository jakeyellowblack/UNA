<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		.table {
			width: 100%;
			border: 1px solid #999999;
		}
	</style>
</head>
<body>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Número</th>
                <th>Monto</th>

			</tr>
		</thead>
		<tbody>
			@foreach($cuenta as $cu)
			<tr>
				<td>{{ $cu->nombre }}</td>
				<td>{{ $cu->numero }}</td>
				<td>{{ $cu->montoT }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>