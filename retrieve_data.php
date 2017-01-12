		<?php

			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "CourseDB";
			$courseCode = "CSC207";
			$conn = mysqli_connect($servername, $username, $password,$dbname);

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully"."<br>";



		$sql = "SELECT commentID, commentString, upVote, downVote, dateStamp FROM CSC207";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			for ($x = 0; $x < $result->num_rows; $x++){
				$row = $result->fetch_assoc();
				echo $row["commentID"];
				echo $row["commentString"];
				echo $row["upVote"];
				echo $row["downVote"];
				echo $row["dateStamp"]."<br>";
			} 


			
			


		    #while($row = $result->fetch_array()) {
        		
		} else {
		    echo "0 results";
		}
		$conn->close();


		?>
