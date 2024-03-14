<!DOCTYPE html>
<html>

<head>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
		}
	</style>
</head>

<body>
	<h1>Invoice</h1>

	<table>
		<thead>
			<tr>
				<th>Number</th>
				<th>Date</th>
				<th>Customer Name</th>
				<th>Customer Address</th>
				<th>Total Amount</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $invoice->number }}</td>
				<td>{{ $invoice->date }}</td>
				<td>{{ $invoice->customer_name }}</td>
				<td>{{ $invoice->customer_address }}</td>
				<td>{{ $invoice->total_amount }}</td>
			</tr>
		</tbody>
	</table>
</body>

</html>
