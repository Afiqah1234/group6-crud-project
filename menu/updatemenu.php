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
    // output data of each row if record found
 echo "<table border='1'>
		<tr>
			<th>Item Name</th>
			<th>Price</th>
			<th>Category</th>


		</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["item name"]. " </td>
			<td> ". $row["price"]. " </td>
			<td>" . $row["category"] . "</td>
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();


//isset to check form data is empty 
 if(empty(trim(isset($_POST["item name"])))){
	  

        echo "<br><br><br>";
    } else
	{
       	$item name= trim($_POST['item name']);
       	$price= trim($_POST['price']);
       	$category= trim($_POST['category']);		
		
		//SQL, change into your table name and columnid
   
	$sql2 = "UPDATE customers SET price='$price', category='$category' WHERE item name='$item name'";			

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
				<label for="item name">Item Name:</label>
				<input type="text" name="item name" required>
			</td>
		</tr>
 		<tr>
			<td>
				<label for="price">Price:</label>
				<input type="text" name="price" required>
			</td>
		</tr>  
		
		 		<tr>
			<td>
				<label for="category">Category:</label>
				<input type="text" name="category" required>
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