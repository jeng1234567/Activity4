<?php
include "log-header.php";
?>
    <!--login start-->
    <div style="display:flex;justify-content:left;">
        <img style="padding-top:0.3rem;padding-bottom:0.3rem;margin-top:5rem;margin-left:0.5rem" width="200rem" height="auto" src="./img/logo.png" alt="">
        <h1 style="font-size:3rem;margin-top:10rem;margin-left:1rem" >Welcome to <br> <b><em>La Barberia de Jeco</em></b></h1>   
         
    </div>
    <br><br><br>
    <div style="display:flex;justify-content:left">   
        <div class="childCon1" style="margin-left:5rem"> 
            <img class="call" src="./img/call.svg" style="width:4rem;height:auto" >
            <h2>Call Us on</h2>
           
            <p>09068945557</p>
       </div>
       <div class="childCon2" style="margin-left:5rem">
            <img src="./img/facebook-app-logo.svg" style="width:4rem;height:auto">
            <h2>Follow Us on <br>FACEBOOK</h2>
            
            <p><em>La Barberia de Jeco</em></p>
       </div>
       <div class="childCon3" style="margin-left:5rem">
            <img class="insta" src="./img/instagram.svg" style="width:4rem;height:auto">
            <h2>Follow Us on <br>INSTAGRAM</h2>
    
            <p><em>@laBarberiadeJeco</em></p>
      </div>
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