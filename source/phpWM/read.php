<?php

require_once 'conn.php';
$query = "SELECT * FROM phpwm";
			$data = $conn->query($query);
			
		echo "<table><tr> 
				<th>id</th>
				<th>message</th>
				<th>posting_time</th>
			</tr>";
		foreach($data as $row)
		{
			echo "<tr>
				<td>".$row["id"]."</td>
				<td>".$row["message"]."</td>
				<td>".$row["posting_time"]."</td>
			</tr>";
		}
		echo "</table>";
?>