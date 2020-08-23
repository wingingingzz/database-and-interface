<!----------------------------------- Example #6 ----------------------------------->
<!-- use with Example #6 index2.php and myphp.php -->

<?php
	$id = $_POST["id"];

	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "DBI";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) 
	{
    		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully <br />";

	$sql = "SELECT * FROM people WHERE id = $id";

	$result = $conn->query($sql);
	$nrow = $result->num_rows;

	if ($nrow > 0) 
	{
    		// output data of each row
    		while($row = $result->fetch_assoc()) 
		// fetch_assoc() returns false if there is no more rows
		{
			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$dob = $row["dob"];
			$telephone = $row["telephone"];
    		}
	}
	else 
	{
    		echo "0 results";
	}

	
	$conn->close();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>

		<form action = "myphp.php" method = "post">
			ID: <input type = "text" name = "id" size = "30" value="<?php echo $id;?>"/><br />
			First Name: <input type = "text" name = "firstname" size = "30" value="<?php echo $firstname;?>"/><br />
			Last Name: <input type = "text" name = "lastname" size = "30" value="<?php echo $lastname;?>"/><br />
			DOB: <input type = "text" name = "dob" size = "30" value="<?php echo $dob;?>"/><br />
			Telephone: <input type = "text" name = "telephone" size = "30" value="<?php echo $telephone;?>"/><br />

			<input type = "submit" value = "Update" />
       			<input type = "reset" value = "Reset" />
		</form>
		
	</body>
</html>