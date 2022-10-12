<html>
	<head>
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
		
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
		
		<script>
			$(document).ready( function () {
				$('#myTable').DataTable({
					
					 buttons: [
							'copy', 'excel', 'pdf'
						]
				});
			} );
		</script>
	</head>
	<body>
		<table id="myTable">
			<thead>
			<tr>
				<th>demo</th>
				<th>demo</th>
				<th>demo</th>
				<th>demo</th>
			</tr>
			</thead>
			<tbody>
			<?php
			for($i=1;$i<=100;$i++)
			{
				echo "<tr>";
					for($j=1;$j<=4;$j++)
						echo "<td> demo".$i*$j."</td>";
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
	</body>
</html>