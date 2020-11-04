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
				<th>Tipo</th>
				<th>Concepto</th>
                <th>Fecha</th>
				<th>Monto</th>
                <th>Cuenta ID</th>


			</tr>
		</thead>
		<tbody>
			@foreach($presupuesto as $pre)
			<tr>
				<td>{{ $pre->tipo }}</td>
				<td>{{ $pre->concepto }}</td>
                <td>{{ $pre->created_at }}</td>
				<td>{{ $pre->montoT }}</td>
                <td>{{ $pre->cuenta_id }}</td>


			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>