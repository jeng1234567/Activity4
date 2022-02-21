<?php
include "log-header.php";

	
?>


<?php
  if(isset($_POST['log'])){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password =md5($password);
        $sql = "SELECT * FROM user  WHERE email = '".$email."' AND password = '".$password."'";
        $result = mysqli_query($data, $sql);
        $row = mysqli_fetch_array($result);
					
        if (!empty($row)) {
            
                
                $_SESSION["welcome"] = "Welcome $username. You are now logged in!";   
                header('Location: about.php');
                die();
        }

        else if (empty($row)) {
        header('Location: index.php?invalid=error');

        }
    }
  }
?>


    <!--login start-->
    <div style="display:flex;" id="home">
        <img style="margin-top:6rem;margin-left:40rem" width="200rem" height="auto" src="./img/logo.png" alt="">
        <h1 style="font-size:3rem;margin-top:8rem;margin-left:1rem" >Welcome to <br> <b><em>La Barberia de Jeco</em></b></h1>   
         
    </div>
   <!--<div style="margin-left:53rem;padding-top:rem">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
    </div>-->
    <form action="" method="POST">
        <div class="form-floating mb-3" style="width:25rem;margin-left:53rem">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email" name="email">Email</label>
                    </div>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:53rem">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password" name="password">Password</label>
                    </div>

                    <div class="space" style="margin-left:60rem">  
                        <input type="checkbox">&nbsp;  
                        <label>Remember me?</label>  

                   </div>  
                   <div style="margin-left:62rem;">
        
                        <a  type="submit" class="btn btn-dark lo" data-bs-toggle="modal" style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" data-bs-target="#"><b>LOGIN</b></a>
                                                    
                    </div> 
                    <br>
                    <div style="margin-left:45rem;">
                        <p class="form__text">
                            <a href="#" class="form__link"  data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#forgot">Forgot your password?</a>
                        </p>
                        <p class="form__text">
                            <a class="form__link" href="#" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#sign">Don't have an account? Create account</a>
                        </p>
    
        </div>
    </form>
                    <br>

    <section class="about" id="about">
        <div style="margin-left:35rem ;max-width: 500px;" class="row" >
                <h2 >About Us:</h2>
              
                <p style="margin-left:1rem">
                    At the la Barberia de Jeco , we have confidence in excellence with a heart. We have made a barber that offers the most noteworthy quality hair benefits in a setting that is more advantageous for the earth, our visitors and our staff.
                    <br>
                    <br>
                    Our customers are vital to us, so we constantly train our specialists to guarantee that all medicines are of the most astounding standard and that every customer gets the best consideration.
                </p>
            <br><br><br>
        </div>
    </section>

    <section class="portfolio" id="portfolio"> 
        <h1 class="" style="margin-left:57rem;" >Portfolio</h1>
            <div class="container" style="display:flex;justify-content:flex-end;"  >
                <div class="row" style="max-width: 500px;">
                <hr>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/2.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/3.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/4.png" class="img-fluid">
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/5.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/6.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/7.png" class="img-fluid">
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/8.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/9.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/11.png" class="img-fluid">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/1.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:1rem">
                        <img src="./img/10.png" class="img-fluid">
                    </div>
                   
                   
                </div>
            </div>
            <br><br>
    </section>
    <!--
    <section class="blog" id="blog">
            <div class="container" >
            <h1 class="text-center">Blog</h1>
             <div class="row">
              <div class="col-md-4 col-lg-4 col-sm-12">
               <div class="card">
                <div class="card-img">
                 <img src="./img/pic1.jpg" class="img-fluid">
                </div>
                
                <div class="card-body">
                <h4 class="card-title">Post Title</h4>
                 <p class="card-text">
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                </div>
                <div class="card-footer">
                 <a href="" class="card-link">Read more</a>
                </div>
               </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
               <div class="card">
                <div class="card-img">
                 <img src="./img/pic2.jpg" class="img-fluid">
                </div>
                
                <div class="card-body">
                   <h4 class="card-title">Post Title</h4>
                 <p class="card-text">
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                </div>
                <div class="card-footer">
                 <a href="" class="card-link">Read more</a>
                </div>
               </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
               <div class="card">
                <div class="card-img">
                 <img src="./img/pic3.jpg" class="img-fluid">
                </div>
                
                <div class="card-body">
                <h4 class="card-title">Post Title</h4>
                 <p class="card-text">
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                </div>
                <div class="card-footer">
                 <a href="" class="card-link">Read more</a>
                </div>
               </div>
              </div>
             </div>
            </div>
    </section>
    <section class="team" id="team">
            <div class="container" >
               <h1 class="text-center">Developers</h1>
             <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 item">
               <img src="./img/prof1.jpg" class="img-fluid" alt="team">
               <div class="des">
                 Rica
                </div>
               <span class="text-muted">Project Manager</span>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 item">
               <img src="./img/prof2.jpg" class="img-fluid" alt="team">
               <div class="des">
                  Wadzna
                </div>
               <span class="text-muted">Business Analyst</span>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 item">
               <img src="./img/prof3.jpg" class="img-fluid" alt="team">
               <div class="des">
                 Jessa 
                </div>
               <span class="text-muted">Lead Developer</span>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 item">
               <img src="./img/prof1.jpg" class="img-fluid" alt="team">
                <div class="des">
                 Christian
                </div>
               <span class="text-muted">UX/UI Designer</span>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 item">
                <img src="./img/prof1.jpg" class="img-fluid" alt="team">
                 <div class="des">
                  Raven
                 </div>
                <span class="text-muted">Quality Assurance Engineer</span>
               </div>
             </div>
            </div>
    </section>-->
    <footer>
        <main class="contact" id="contact">
           <!-- <div class="contact-form">
                <div class="container">
                 <form>
                  <div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <h1>Get in Touch</h1> 
                   </div>
                   <div class="col-lg-8 col-md-8 col-sm-12 right">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control form-control-lg">
                        </textarea>
                      </div>
                      <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                   </div>
                  </div>
                 </form>
                </div>
               </div>-->
            
        </main>
    </footer>
     
    <!--<div class="media">
        <div class="col">
           <div >
            <img class="call" src="/img/call.svg">
            <h2>Call Us on</h2>
            <p>09068945557</p>
           </div>
        </div>
    <div class="col">
       <div class="fb">
        <img src="/img/facebook-app-logo.svg">
        <h2>Follow Us on <br>FACEBOOK</h2>
        <p><em>Jay Tayer Barbershop de Zamboanga</em></p>
       </div>
       
      </div>
      
      <div class="col">
        <img class="insta" src="/img/instagram.svg">
        <h2>Follow Us on <br>INSTAGRAM</h2>
        <p><em>@jaytayerbarbershopdezambo</em></p>
      </div>
   </div>-->

   <div style="display:flex;justify-content:flex-end">   
        <div class="childCon1" style=""> 
            <img class="call" src="./img/call.svg" style="width:3rem;height:auto" >
            <h4>Call Us on</h4>
           
            <p>09068945557</p>
       </div>
       <div class="childCon2" style="margin-left:5rem">
            <img src="./img/facebook-app-logo.svg" style="width:3rem;height:auto">
            <h4>Follow Us on <br>FACEBOOK</h4>
            
            <p><em>La Barberia de Jeco</em></p>
       </div>
       <div class="childCon3" style="margin-left:5rem">
            <img class="insta" src="./img/instagram.svg" style="width:3rem;height:auto">
            <h4>Follow Us on <br>INSTAGRAM</h4>
    
            <p><em>@laBarberiadeJeco</em></p>
      </div>
   </div>

<style>
    .lo:hover{
        color: white;
        background-color: rgba(0,0,0,1)

    }
</style>



<!--Modal-->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            <div style="display:flex;justify-content:center">
                <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
            <h5 style="display:flex;justify-content:center ;margin-top:1.5rem" class="modal-title">La Barberia de Jeco</h5>
            
            </div>
           <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
            
      </div>
      <form class="form" action="" method="post">
                    <h1 class="form__title">LOGIN FORM</h1>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="text" class="form-control" id="e" name="e" placeholder="Email" required>
                        <label for="e" name="e">Email</label>
                    </div>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="password" class="form-control" id="p" name="p" placeholder="Password" required>
                        <label for="p" name="p">Password</label>
                    </div>

                    <div class="space" style="margin-left:11rem">  
                        <input type="checkbox">&nbsp;  
                        <label>Remember me?</label>  

                   </div>  
                   <div style="display:flex;justify-content:center">
                        <input type="submit" name="login" class="btn btn-secondary" data-bs-dismiss="modal" value="LOGIN">
                    </div>
                    <br>
                      <p class="form__text">
                        <a href="#" class="form__link"  data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#forgot">Forgot your password?</a>
                    </p>
                    <p class="form__text">
                        <a class="form__link" href="#" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#sign">Don't have an account? Create account</a>
                    </p>
        </form>  
                    <br>
                <div class="modal-footer">
                    <a href="index.php"><button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button></a>
                
                </div>
    </div>
  </div>
</div>



<div class="modal fade" id="login2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            
            <div style="display:flex;justify-content:center">
                <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                <h5 style="display:flex;justify-content:center ;margin-top:1.5rem" class="modal-title">La Barberia de Jeco</h5>
            
            </div>
            <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
            
      </div>
      <form class="form" id="login">
                    
                    
                    <h1 class="form__title">LOGIN </h1>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" >
                        <label for="pass">Password</label>
                    </div>

                    <div class="space" style="margin-left:11rem">  
                        <input type="checkbox">&nbsp;  
                        <label>Remember me?</label>  
                       
                   </div>  
                   <div style="display:flex;justify-content:center">
                        <a href="customer-booking.php" class="btn btn-dark"  style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" ><b>LOGIN</b></a>
             
                    </div>
                    <br>


                      <p class="form__text">
                        <a href="#" class="form__link"  data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#forgot">Forgot your password?</a>
                    </p>
                    <p class="form__text">
                        <a class="form__link" href="#" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#sign">Don't have an account? Create account</a>
                    </p>
                </form>  
                    <br>
                <div class="modal-footer">
                <a href="index.php"><button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button></a>
                
                </div>
    </div>
  </div>
</div>


<div class="modal fade" id="sign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            
            <div style="display:flex;justify-content:center">
                <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                <h5 style="display:flex;justify-content:center ;margin-top:1.5rem" class="modal-title">La Barberia de Jeco</h5>
            
            </div>
           <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <form class="form" action="add_account.php" method="POST">
            <h1 style="margin-left:1.5;marging-right:2rem" class="form__title">CREATE ACCOUNT</h1>
            <div class="form__message form__message--error"></div>

            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
                <label for="name">Name</label>
            </div>

            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" >
                <label for="email">Email Address</label>
            </div>

            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="number" class="form-control" id="number" name="number" placeholder="Phone Number" >
                <label for="number">Phone Number</label>
            </div>

            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" >
                <label for="address">Address</label>
            </div>

            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                <label for="password">Password</label>
            </div>

            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" >
                <label for="cpassword">Confirm Password</label>
            </div>

            <div class="space" style="display:flex;justify-content:center">  
                <input type="checkbox">&nbsp;
                <a class="form__link" href="#sign" id="linkLogin"><label>I agree with terms and conditions.</label> </a>
           </div>  

           <div style="display:flex;justify-content:center">
                <a href="customer-booking.php" class="btn btn-dark"  style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" >
                <button type="submit" name="sign_up" class="btn " style="color:white;" data-bs-dismiss="modal" >Sign Up</button>
            </a>
            </div>
            <br>
            <p class="form__text">
                <a class="form__link" data-bs-toggle="modal"  data-bs-dismiss="modal" href='index.php' id="linkLogin">Already have an account? Sign in</a>
            </p>

                <br>
                <div class="modal-footer">
                <a href="index.php"><button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button></a>
                
            </div>
        </form> 
    </div>
  </div>
</div>

<div class="modal fade" id="forgot" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            
            <div style="display:flex;justify-content:center">
                <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                <h5 style="display:flex;justify-content:center ;margin-top:1.5rem" class="modal-title">La Barberia de Jeco</h5>
            
            </div>
           <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <form class="form" id="createAccount">
            <h1 class="form__title">FORGOT PASSWORD </h1>
            <div class="form__message form__message--error"></div>
            <h3 style="margin:2rem">
                Send a Verification Code to your Gmail to reset password?
            </h3>
            
           
        </form>
                    <br>
                <div class="modal-footer">
                <a href="#"><button type="button"  data-bs-toggle="modal" data-bs-target="#code" class="btn btn-primary"  data-bs-dismiss="modal">Yes</button></a>
                
                <a href="index.php"><button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button></a>
                
                </div>
    </div>
  </div>
</div>


<div class="modal fade" id="code" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            
            <div style="display:flex;justify-content:center">
                <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                <h5 style="display:flex;justify-content:center ;margin-top:1.5rem" class="modal-title">La Barberia de Jeco</h5>
            
            </div>
           <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <form class="form" id="createAccount">
            <h1 class="form__title">FORGOT PASSWORD </h1>
            <div class="form__message form__message--error"></div>
           
            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="number" class="form-control" id="number" name="number" placeholder="Enter 6-digit Code " >
                <label for="number">Verification Code</label>
                
            </div>
            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="New Password" >
                <label for="pass">New Password</label>
                
            </div>
            <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password" >
                <label for="cpass">Confirm Password</label>
                
            </div>
           
            <div style="display:flex;justify-content:center">
                <a href="index.php" class="btn btn-dark"  style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" ><b>Enter</b></a>
             
            </div>
        </form>
                    <br>
                <div class="modal-footer">
                <a href="index.php"><button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button></a>
                
                </div>
    </div>
  </div>
</div>
      
                    
                        
<?php include('login.php');?>    
               
<style>
    body{
        background-image: url(./img/bg.png);
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        background-size: 85rem;
    }
    .checked {
    color: orange;
    }
    /*form*/

   
    /*end-form*/
</style>

    

                                           
<?php
include "log-footer.php";
?>