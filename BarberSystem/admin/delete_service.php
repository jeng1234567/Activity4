<?php
	session_start();
	include_once('../database.php');

	if(isset($_POST['delete'])){
		$database = new Connection();
		$db = $database->open();
		try{

			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("DELETE FROM services WHERE id = :ser_id");

            //bind params
            $sql->bindParam(':ser_id', $_GET['id'], PDO::PARAM_INT);

			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Service deleted successfully': 'Something went wrong. Cannot delete axie.';	
	    
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