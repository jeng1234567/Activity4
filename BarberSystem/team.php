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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Successfully Booked</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                <h3 style="margin-top:20px;margin-left:2rem; ">
                    Thank you for Choosing Barberia de Jeco.
                </h3>
                <br>
                <h5 style="margin-left:5rem; margin-right:1rem">
                    Kindly Booking Status for your Details.
                </h5>
                   
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
</style>
  
    
                                           
<?php
include "log-footer.php";
?>