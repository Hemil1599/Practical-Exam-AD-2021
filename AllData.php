<?php 
include 'dbcon.php';
$sql="select * from data";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Data</title>
</head>
<body>
<table border="1" align="center">
	<tr>
		<td>Mail-ID </td>
		<td>Phone Number</td>
		<td>Car Model</td>
		<td>Car Number</td>
	</tr>
	<?php
	while($row=mysqli_fetch_assoc($res)){
		echo '<tr>';
		echo '<td>'.$row['mail'];
		echo '</td>';
		echo '<td>'.$row['phone'];
		echo '</td>';
		echo '<td>'.$row['model'];
		echo '</td>';
		echo '<td>'.$row['number'];
		echo '</td>';
		echo '</tr>';

	}
	?>
</table>
</body>
</html>
