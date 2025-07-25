<!DOCTYPE html>
<html>
<head>
	<title>Heaven Restaurant</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<table border='1'>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>


		</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["name"]. " </td>
			<td> ". $row["phone"]. " </td>
			<td> ". $row["email"]. "</td>
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();

include 'footer.php';
?>

</body>
</html>