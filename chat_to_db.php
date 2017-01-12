<html>
	<body>
		<?php
			function generateRandom() {
			    # prevent the first number from being 0
			    $output = rand(1,9);

			    for($i=0; $i<74; $i++) {
			        $output .= rand(0,9);
			    }

			    return $output;
			}

				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "CourseDB";

				$conn = mysqli_connect($servername, $username, $password,$dbname);

				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				echo "Connected successfully"."<br>";



			$courseCode = "CSC207"; #get it from HTML 
			#$chatString =$_POST["question"];
			$chatString ="message ?";
			$upVote	= "0";
			$downVote = "0";
			$chatID = generateRandom();   #use courseCode to find which table and number of entry of that table + 1 

			echo"varialbe all clean"."<br>";
			echo"chatID: ".$chatID."<br>";


			$sql = "INSERT INTO CSC207 (commentID, commentString, upVote, downVote, dateStamp)VALUES ('".$chatID."', '".$chatString."','".$upVote."','".$downVote."',NOW())";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();


		?>
	</body>
</html>