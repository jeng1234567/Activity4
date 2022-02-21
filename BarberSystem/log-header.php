<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "barberdb";

    $data = mysqli_connect($host, $user, $password, $db);

    if($data === false){
        die("connection error");
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La Barberia de Jeco</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>
  <body>
  

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
    <nav class="navbar navbar-expand-lg fixed-top "> 
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
            <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse " id="navbarSupportedContent"><ul class="navbar-nav mr-4">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
               
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a></li>  
           <li class="nav-item">
               <a class="nav-link " href="#portfolio">Portfolio</a>    
            </li>
            <!--
            <li class="nav-item"> 
               <a class="nav-link " href="#blog">Blog</a></li>-->
           
           <li class="nav-item"> 
            <a class="nav-link " href="#contact">Contact</a></li> 
            <li class="nav-item"> 
                <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#admin">Admin</a></li> 
                
           </ul> 
           </div>
        </nav>
    </header>
    <!--header area end-->
<div class="modal fade" id="admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:flex;justify-content:center;">
      <img style="margin-left:rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
            <h5  class="modal-title">La Barberia de Jeco</h5>
        
      </div>
                <h1 class="form__title">ADMIN LOGIN</h1>
                <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" >
                        <label for="pass">Password</label>
                    </div>
                    <div style="display:flex;justify-content:center">
                        <a href="admin/admin-status.php" class="btn btn-dark"  style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" ><b>LOGIN</b></a>
            
                    </div>
                   
                    <br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
    </div>
  </div>
</div>

    <style>
        .navbar{ 
            background: rgba(0,0,0,0.3);
            
    
    font-family: 'Poppins', sans-serif;
    

}

.nav-link , .navbar-brand{ 
    
    color: black; 
    cursor: pointer;
    font-size: 20px;
}
.navbar-brand{
    
}
.navbar-brand:hover{
    background: white; color: black;
}

.nav-link{ margin-right: 1em !important;}

.nav-link:hover{ background: white; color: black; }

.navbar-collapse{  }

.navbar-toggler{  background:#fff !important;}

.navbar-collapse{
 justify-content: flex-end;
}
.bg-dark{
background-color:#343a40!important
}
.bg-primary{
background-color:#007bff!important
}

@media screen and (max-width: 600px) {
  .collapse {
    float: none;
    width: 100%;
  }
}
/*form*/
.form > *:first-child {
    margin-top: 0;
}

.form > *:last-child {
    margin-bottom: 0;
}

.form__title {
    
    margin-bottom: 2rem;
    text-align: center;
    font-family: 'Playball', cursive;
}

.form__message {
    text-align: center;
    margin-bottom: 1rem;
}

.form__message--success {
    color: var(--color-success);
}

.form__message--error {
    color: var(--color-error);
}

.form__input-group {
    margin-bottom: 1rem;
}

.form__input {
    display: block;
    width: 100%;
    padding: 0.75rem;
    box-sizing: border-box;
    border-radius: var(--border-radius);
    border: 1px solid #dddddd;
    outline: none;
    background: #eeeeee;
}
.form__input:focus {
    border-color: var(--color-primary);
    background: #ffffff;
}
.form__input--error {
    color: var(--color-error);
    border-color: var(--color-error);
}
.form__input-error-message {
    margin-top: 0.5rem;
    font-size: 0.85rem;
    color: var(--color-error);
}

.form__button {
    width: 30%;
    font-weight: bold;
    font-size: 2.1rem;
    color: #fcf7f7;
    border: none;
    border-radius: 15%;
    outline: none;
    cursor: pointer;
    background-color: rgb(8, 8, 8);
    padding: 0 10px 0 10px;
    
    
}

.form__button:hover {
    color:#ece9e6;
    background-color: rgb(204, 106, 14);
    border: black;

}

.form__button:active {
    transform: scale(0.98);
}

.form__text {
    text-align: center;
}

.form__link {
    color: var(--color-secondary);
    text-decoration: none;
    cursor: pointer;
}

.form__link:hover {
    text-decoration: underline;
}

    </style>
<?php
include "log-footer.php";
?>