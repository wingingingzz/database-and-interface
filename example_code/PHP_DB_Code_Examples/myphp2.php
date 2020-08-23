<!----------------------------------- Example #5 ----------------------------------->
<!-- use with Example #5 index.php and myphp.php -->

<?php
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

	$sql = "SELECT * FROM people";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
    		// output data of each row
    		while($row = $result->fetch_assoc()) 
		// fetch_assoc() returns false if there is no more rows
		{
        		echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " - Lastname: " . $row["lastname"]. " - DOB: " . $row["dob"]. " - Telephone: " . $row["telephone"]. "<br>";
    		}
	}
	else 
	{
    		echo "0 results";
	}
	$conn->close();
?>
