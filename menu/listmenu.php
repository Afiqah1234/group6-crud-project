<!DOCTYPE html>
<html>
<head>
	<title>Heaven Restaurant</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<table border='1'>
		<tr>
			<th>ID</th>
			<th>Item Name</th>
			<th>Price</th>
                        <th>Category</th>


		</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["menu_id"]. " </td>
			<td> ". $row["item name"]. " </td>
			<td> ". $row["price"]. "</td>
                        <td> ". $row["category"]. "</td>
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