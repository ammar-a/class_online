<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "CourseDB";

	$conn = mysqli_connect($servername, $username, $password,$dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE TABLE `".$ClassID."` (comment_id VARCHAR(20), comment_str VARCHAR(255), up INT, down INT, date_time TIMESTAMP)";
	if ($conn->query($sql) === TRUE) {
	    echo "Table $ClassID created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>