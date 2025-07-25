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
                        <td>" . $row["order date"] . "</td>
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();


//isset to check form data is empty 
 if(empty(trim(isset($_POST["order_id"])))){
	  

        echo "<br><br><br>";
    } else
	{
       	$order_id= trim($_POST['order_id']);
       	$customer_id= trim($_POST['customer_id']);
       	$staff_id= trim($_POST['staff_id']);
        $order date= trim($_POST['order date']);		
		
		//SQL, change into your table name and columnid
   
	$sql2 = "UPDATE orders SET customer_id='$customer_id', staff_id='$staff_id', order date='$order date' WHERE order_id='$order_id'";			

if ($conn2->query($sql2) === TRUE) {
  echo "<br><br>Rekod telah berjaya Dikemaskini";
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
			<th>No ID Data Yang Hendak Di Kemaskini</th>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>
				<label for="order_id">Order ID:</label>
				<input type="text" name="order_id" required>
			</td>
		</tr>
 		<tr>
			<td>
				<label for="customer_id">Customer ID:</label>
				<input type="text" name="customer_id" required>
			</td>
		</tr>  
		
		 		<tr>
			<td>
				<label for="staff_id">Staff ID:</label>
				<input type="text" name="staff_id" required>
			</td>
		</tr> 
                <tr>
                        <td>
                                <label for="order date">Order Date:</label>
                                <input type="datetime" name="order date" required>  
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