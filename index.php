<?php 

	$link = mysqli_connect("localhost", "root", "luck99", "dericsp");
	
	if (mysqli_connect_error()) {
		
		die("There was an error connecting to database");
	
	}

//Insert new value to a table
//	$query = "INSERT INTO `users` (`email`, `password`) VALUES('tommy@gmail.com', 'ilovemydad')";

//Update a value on a table
//	$query = "UPDATE `users` SET password = 'adfasd1234' WHERE email = 'robpercival80@gmail.com', LIMIT 1";
//
//	mysqli_query($link, $query);
//	executar a query

//Selecionando todos os dados da tabela
	$query = "SELECT * FROM users WHERE email = kirsten@kirstenpercival.co.uk";

	if ($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result);
		
		while ($row = mysqli_fetch_array($result)) {

			print_r($row);
		}
	}

?>