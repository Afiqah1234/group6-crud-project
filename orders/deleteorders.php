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
    // output data of each row if record found
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
			<td>" . $row["staff_id"] . "</td>
                        <td> ". $row["order date"]. "</td>
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();



 if(empty(trim(isset($_POST["padamData"])))){
	  

        echo "<br><br><br> Masukkan ID Data yang Hendak Di Padam";
    } else
	{
       	$padamData = trim($_POST['padamData']);
	
		
		//SQL, change into your table name and columnid
   
		$sql2 = "DELETE FROM orders WHERE order_id=$padamData ";			

if ($conn2->query($sql2) === TRUE) {
  echo "<br><br>Rekod telah berjaya dipadam";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn2->error;
}

$conn2->close();
        
    	}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


   <table>
		<br>
		<tr>
			<td>No ID Data Yang Hendak Di Padam</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>
				<label for="padamData">Order ID:</label>
				<input type="text" name="padamData" required>
			</td>
		</tr>
    

		<tr>
			
			<td>
				<input type="submit" value="Submit">
				<input type="reset" value="Semula">
			</td>
		</tr>
		</table>

</form>




<?php
include 'footer.php';
?>

</body>
</html>