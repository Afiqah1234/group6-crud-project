<!DOCTYPE html>
<html>
<head>
	<title>Heaven Restaurant</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<table border='1'>
		<tr>
			<th>Order ID</th>
			<th>Customer ID</th>
			<th>Staff ID</th>
                        <th>Order Date</th>


		</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["order_id"]. " </td>
			<td> ". $row["customer_id"]. " </td>
			<td> ". $row["staff_id"]. "</td>
                        <td> ". $row["order date"]. "</td>
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