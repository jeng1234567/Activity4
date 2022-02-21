<?php
	session_start();
	include('database.php');

    $error=NULL;

	if(isset($_POST['log'])){
		$database = new Connection();
		$db = $database->open();
        
		try{
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password =md5($password);
            $sql = "SELECT email,password FROM user  WHERE email = '".$email."' AND password = '".$password."'";
            $result = mysqli_query($data, $sql);
            $row = mysqli_fetch_array($result);
           if($row==0){
                echo "password don't match" ;
                header('location: about.php');
                $_SESSION['message'] = ( $sql->execute()) ? 'Account added successfully' : 'Something went wrong. Cannot add account.';
                die();  

            }

            else {
                

			    //if-else statement in executing our prepared statement
			    $_SESSION['message'] = ( $sql->execute()) ? 'Account added successfully' : 'Something went wrong. Cannot add account.';
	    
            }
			//make use of prepared statement to prevent sql injection
			
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

    
  
    header('location: index.php');
	
?>
