<?php
	session_start();
	include('database.php');

    $error=NULL;

	if(isset($_POST['sign_up'])){
		$database = new Connection();
		$db = $database->open();
        
		try{
           if($_POST['password'] != $_POST['cpassword']){
                echo "password don't match" ;
            }

            else {
                
                
                $_POST['cpassword']=md5(time().$_POST['cpassword']);
                $_POST['password'] =md5($_POST['password']);
                $vkey =$_POST['cpassword'];
                $sql = $db->prepare("INSERT INTO user (name, email, address, number, password,vkey) VALUES (:name, :email, :address, :number, :password, :cpassword)");
              
                    $to= $_POST['email'];
                    $subject ="Email Verification";
                    $message= "<a href= 'http://localhost/verify.php?vkey=$vkey'> Register Account</a>";
                    $headers =" From: jessafrancisco842@gmail.com \n";
                    $headers .= "MIME-Version: 1.0"."\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
                    mail($to,$subject,$message,$headers);

                    
               
			    
                
                //bind
			    $sql->bindParam(':name', $_POST['name']);
                $sql->bindParam(':email', $_POST['email']);
			    $sql->bindParam(':password', $_POST['password']);
			    $sql->bindParam(':address', $_POST['address']);
                $sql->bindParam(':number', $_POST['number']);
                $sql->bindParam(':cpassword', $_POST['cpassword']);

                




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
