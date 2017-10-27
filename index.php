<?php 

	$link = mysqli_connect("localhost", "root", "luck99", "dericsp");
	
	if (mysqli_connect_error()) {
		
		die("There was an error connecting to database");
	
	}


//	$query = "INSERT INTO `users` (`email`, `password`) VALUES('tommy@gmail.com', 'ilovemydad')";

	$query = "UPDATE `users` SET email = 'robpercival80@gmail.com' WHERE id = 1 LIMIT 1";

	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users";

	if ($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result);
		
//		print_r($row);
		
		echo "Your email is ".$row['email']." And your password is ".$row['password'];
	}

?>