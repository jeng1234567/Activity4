<?php
	session_start();
	include_once('../database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
            $sql = $db->prepare("UPDATE services SET Service = :Service, Stylist = :Stylist, Price = :Price, Branch = :Branch WHERE id = :ser_id");  
			//bind                 
            $sql->bindParam(':Service', $_POST['Service']);
            $sql->bindParam(':Stylist', $_POST['Stylist']);
            $sql->bindParam(':Price', $_POST['Price']);
			$sql->bindParam(':Branch', $_POST['Branch']);
            $sql->bindParam('ser_id', $_GET['id'], PDO::PARAM_INT);
			$_SESSION['message'] = ( $sql->execute()) ? 'Services updated succesfully' : 'Something went wrong. Cannot add services.';	
	    
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