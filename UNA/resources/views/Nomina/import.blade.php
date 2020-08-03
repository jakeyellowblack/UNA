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
				<th>Salario Semanal</th>
				<th>Salario Diario</th>
                <th>Salario por Hora</th>
				<th>Salario por Hora Extra Diuerna</th>
                <th>Salario Integral</th>
				<th>Feriado</th>
                <th>Días Laborados</th>
                <th>Utilidades</th>
				<th>Monto Total</th>

			</tr>
		</thead>
		<tbody>
			@foreach($nomina as $no)
			<tr>
				<td>{{ $no->id }}</td>
				<td>{{ $no->salarioSemanal }}</td>
				<td>{{ $no->salarioDiario }}</td>
                <td>{{ $no->salarioHora }}</td>
				<td>{{ $no->salarioHoraExtraDiurno }}</td>
                <td>{{ $no->salarioIntegral }}</td>
                <td>{{ $no->feriado }}</td>
                <td>{{ $no->diasLaborados }}</td>
                <td>{{ $no->utilidades }}</td>
                <td>{{ $no->montoTotal }}</td>


			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>