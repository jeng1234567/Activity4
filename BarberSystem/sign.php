<?php
include "log-header.php";
?>
    <!--login start-->
    <div style="display:flex;justify-content:left;">
        <img style="padding-top:0.3rem;padding-bottom:0.3rem;margin-top:5rem;margin-left:0.5rem" width="200rem" height="auto" src="./img/logo.png" alt="">
        <h1 style="font-size:3rem;margin-top:10rem;margin-left:1rem" >Welcome to <br> <b><em>La Barberia de Jeco</em></b></h1>   
         
    </div>
    <div style="margin-left:14rem;margin-bottom:5rem">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
    </div>
    <div style="margin-left:25rem;">
        
        <a class="btn btn-dark" data-bs-toggle="modal" style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" data-bs-target="#login"><b>LOGIN</b></a>
                                    
    </div> 


<!--Modal-->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            
            <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
            <h5 class="modal-title">La Barberia de Jeco</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form" id="login">
                    
                    
                    <h1 class="form__title">LOGIN FORM</h1>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3" style="width:25rem;margin-left:3rem">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" >
                        <label for="pass">Password</label>
                    </div>
                    <div style="display:flex;justify-content:center">
                        <a href="customer-booking.php" class="btn btn-dark"  style="padding:0.3rem;border-radius:0.5rem;font-size:1.5rem" ><b>LOGIN</b></a>
             
                    </div>
                   
                    
                    <div class="space" style="margin-left:11rem">  
                        <input type="checkbox">&nbsp;  
                        <label>Remember me?</label>  
                       
                   </div>  


                      <p class="form__text">
                        <a href="#" class="form__link" id="forgot">Forgot your password?</a>
                    </p>
                    <p class="form__text">
                        <a class="form__link" href="#"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#sign">Don't have an account? Create account</a>
                    </p>
                </form>  
                    <br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" >
            
            <img style="margin-left:2rem;margin-right:1rem" width="75rem" height="auto" src="./img/logo.png" alt="">
            <h5 class="modal-title">La Barberia de Jeco</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form" id="login">
                    
                    
                    <h1 class="form__title">LOGIN FORM</h1>
                    
                </form>  
                    <br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
    </div>
  </div>
</div>
      
                    
                        
                        
               
<style>
    body{
        background-image: url(./img/login.jpg);
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