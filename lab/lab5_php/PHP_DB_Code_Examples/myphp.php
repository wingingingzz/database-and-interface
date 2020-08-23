<!----------------------------------- Example #1 ----------------------------------->
<!-- use with Example #1 index.php -->
<!-- don’t forget to uncomment the PHP code -->

<?php	
	/*
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
	echo "Connected successfully”;
	*/
?>


<!----------------------------------- Example #2 ----------------------------------->
<!-- use with Example #1 index.php -->
<!-- don’t forget to uncomment the PHP code -->

<?php
	/*
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "DBI2"; // intentionally made it wrong!!!

	// To check if a function exists
	echo "mysql_connect function exists: ";
	echo function_exists("mysqli_connect")?"yes <br />":"no <br />";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (mysqli_connect_errno())  
	{
		printf("Connect failed: %s <br />", mysqli_connect_error());
		exit();
	}
	echo "Connected successfully";
	*/
?>


<!----------------------------------- Example #3 ----------------------------------->
<!-- use with Example #1 index.php -->
<!-- don’t forget to uncomment the PHP code -->

<?php
	/*
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

	$sql = "SELECT id, firstname, lastname FROM people";
	$result = $conn->query($sql);

	$fields = $result->field_count;
	$nrows = $result->num_rows;
	echo "There are " . $fields . " fields, and " . $nrows . " rows in the results<br />";

	if ($nrows > 0) 
	{
    		// output data of each row
    		while($row = $result->fetch_assoc()) 
		// fetch_assoc() returns false if there is no more rows
		{
			$keys = array_keys($row);
			$vals = array_values($row);
			echo "<br />";
			foreach($keys as $temp)
			{
				echo $temp . " ";
			}
			echo "<br />";
			foreach($vals as $temp)
			{
				echo $temp . " ";
			}
			echo "<br />";
        		echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " - Lastname: " . $row["lastname"]. "<br>";
    		}
	}
	else 
	{
    		echo "0 results";
	}
	$conn->close();
	*/
?>



<!----------------------------------- Example #4 ----------------------------------->
<!-- use with Example #4 index2.php -->
<!-- don’t forget to uncomment the PHP code -->

<?php
	/*
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$dob = $_POST["dob"];
	$tel = $_POST["tel"];

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

	$sql = "INSERT INTO people (firstname, lastname, dob, telephone) VALUES ('$firstname', '$lastname', '$dob', '$tel')";

	if($conn->query($sql) === true)
	{
		echo "New record created successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
	$conn->close();
	*/
?>



<!----------------------------------- Example #5 ----------------------------------->
<!-- use with Example #5 index2.php and myphp2.php -->
<!-- don’t forget to uncomment the PHP code -->

<?php
	/*
	$firstname = $_POST["firstname"];

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

	$sql = "DELETE FROM people WHERE firstname = '$firstname'";

	if($conn->query($sql) === true)
	{
		echo "Record deleted successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
	$conn->close();
	
	header("Location: myphp2.php");
	exit();
	*/
?>



<!----------------------------------- Example #6 ----------------------------------->
<!-- use with Example #6 index2.php and myphp3.php -->
<!-- don’t forget to uncomment the PHP code -->

<?php
	/*
	$id = $_POST["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$dob = $_POST["dob"];
	$telephone = $_POST["telephone"];

	echo "$id $firstname $lastname $dob $telephone <br />";

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

	$sql = "UPDATE people SET firstname = '$firstname', lastname = '$lastname', dob = '$dob', telephone = '$telephone' WHERE id = $id";

	if($conn->query($sql) === true)
	{
		echo "Record updated successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
	$conn->close();
	*/
?>



