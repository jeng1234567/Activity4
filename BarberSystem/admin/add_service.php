<?php
	session_start();
	include_once('../database.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("INSERT INTO services (Service, Stylist, Price, Branch) VALUES (:Service, :Stylist, :Price, :Branch)");

			//bind
			$sql->bindParam(':Service', $_POST['Service']);
            $sql->bindParam(':Stylist', $_POST['Stylist']);
			$sql->bindParam(':Price', $_POST['Price']);
			$sql->bindParam(':Branch', $_POST['Branch']);

			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Service added successfully' : 'Something went wrong. Cannot add Service.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: admin-service.php');
?>