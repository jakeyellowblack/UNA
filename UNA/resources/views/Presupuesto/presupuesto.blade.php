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
				<th>ID</th>
				<th>Concepto</th>
				<th>Nombre</th>
                <th>Fecha</th>
				<th>Monto Total</th>

			</tr>
		</thead>
		<tbody>
			@foreach($presupuesto as $pre)
			<tr>
				<td>{{ $pre->id }}</td>
				<td>{{ $pre->concepto }}</td>
				<td>{{ $pre->nombre }}</td>
                <td>{{ $pre->fecha }}</td>
				<td>{{ $pre->montoT }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>