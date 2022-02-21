<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "barberdb";
$message = "";

try{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["login"]))
    {
       /* if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $message = '<label>All field is required</label>';
        }
        else{
            $query = "SELECT * FROM user WHERE email = :email AND
            password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                    array(
                        'email' => $_POST["email"],
                        'password' => $_POST["password"]
                    )
            );
            $count = $statement->rowCount();
            if($count >0)
            {
                $_SESSION["email"] = $_POST["email"];
                head("location: customer-booking.php");
            }
            else{
                $message ='<label>Email or Password is Incorrect</label>';
            }
        }*/
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            $sql = "SELECT * FROM user  WHERE username = '".$username."' AND password = '".$password."'";
            $result = mysqli_query($data, $sql);
            $row = mysqli_fetch_array($result);

            header('Location: super_admin/HomePageSA.php?user=superadmin');
            die();
        }
        else {
            echo "Unexpected error occured!";
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMesage();
}
?>