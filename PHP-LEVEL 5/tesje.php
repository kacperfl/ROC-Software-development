<!DOCTYPE html>
<html>
<head>
	<title>Klantenoverzicht</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Klantenoverzicht</h1>
	<table>
		<thead>
			<tr>
				<th>Voornaam</th>
				<th>Achternaam</th>
				<th>Woonplaats</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Maak verbinding met de database
			require 'database-connectie-kacper.php';
			
			// Voer de query uit om alle klanten op te halen
			$sql = "SELECT * FROM klanten";
			$result = mysqli_query($conn, $sql);

			// Loop door de resultaten en voeg ze toe aan de tabel
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['voornaam']."</td>";
				echo "<td>".$row['achternaam']."</td>";
				echo "<td>".$row['woonplaats']."</td>";
				echo "</tr>";
			}

			// Sluit de databaseverbinding
			mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>