<!DOCTYPE html>
<html>
<head>
	<title>Heaven Restaurant</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

 
  if(empty(trim(isset($_POST["staff"])))){
	  

        echo "<br><br><br>";
    } else
	{
       	$name = trim($_POST['name']);
		$phone= trim($_POST['phone']);
                $email= trim($_POST['email']);
		
		//SQL, change into your table name and column
       	$sql = "INSERT INTO customers (name, phone, email)
			VALUES ('$name','$phone','$email')";	

if ($conn->query($sql) === TRUE) {
  echo "<br><br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        
    	}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <table>
		<tr>
			<td>
				<label for="name">Name:</label>
				<input type="text" name="name" required>
			</td>
		</tr>
    
		<tr>
			<td>
				<label for="phone">Phone:</label>
				<input type="text" name="phone" required>
			</td>
		</tr>
                <tr>
                        </td>
                                <label for="email">Email:</label>
                                <input type="text" name="email" required>
                        </td>
                </tr>

		<tr>
			<td>
				<input type="submit" value="Submit">
			</td>
		</tr>
		</table>

</form>

<?php

include 'footer.php';
?>

</body>
</html>