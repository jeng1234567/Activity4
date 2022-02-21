<?php
include "customer-header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
        <nav class="nav1">
          <ul>
            <li><a href="customer-booking.php"><i class="fas fa-table"></i><span>Booking</span></a></li>
            <li><a href="customer-home.php"><i class="fas fa-bookmark"></i><span>Home Service</span></a></li>
            <li><a href="customer-status.php"><i class="fas fa-home"></i><span>Booking Status</span></a></li>
            <li><a href="customer-history.php"><i class="fas fa-users"></i><span>Booking History</span></a></li>
            <li><a href="customer-stylist.php"><i class="fas fa-user"></i><span>Stylist</span></a></li>
            <li><a href="customer-service.php"><i class="fas fa-book"></i><span>Services</span></a></li>
            <li><a href="customer-feedback.php"><i class="fas fa-comment"></i><span>Feedbacks</span></a></li>
          </ul>
        <hr style="color: white">
      </nav>
      <nav class="nav2">
        <ul>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Settings</span></a>
              <ul>
                  <li><a href="#"><span></span></a></li>
                  <li><a href="#"><span></span></a></li>
              </ul>
            </li>
        </ul>
      </nav>
      
    </div>
  <div class="content">
  <div id="page-stylist" style="margin-top: 2px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            
                                                    <!-- /.col-lg-12 -->

                        <div class="smart-wrap" style="display:flex;justify-content:center;border-radius:5rem">
                            <div class="smart-forms smart-container wrap-2" style="background-color:white;border-radius:3rem">
                            
                                <div class="form-header header-primary"  style="background-color:grey;display:flex;justify-content:center;">
                                    <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                                    <h2 style="display:flex;justify-content:center;padding:1rem;"><i class="fa fa-scissors"></i><em><b>La Barberia de Jeco</b></em></h2>
                                </div>
                                <h3 style="display:flex;justify-content:center;margin-top:1rem">
                                            <b sty>Feedbacks</b>
                                        </h3>   
                                <form method="post" action="/" id="booking-form">
                                <div class="form-body" style="padding:1.5rem">
                               
                                <!-- OUR FORM ELEMENTS WILL GO HERE --> 
                                <h1 style="margin-left: 60px;padding-top:20px">Thank you for choosing <br> <em><b>La Barberia de Jeco</b></em></h1>
                                               
                                           <br>
                                               <p style="margin-left: 30px; margin-top:10px"><em><b>We would like to hear your feedbacks towards our services.</b></em></p>
                                               
                                                                       
                                                   <label for="b_time" class="form-label" style="margin-left: 30px; margin-top:10px"><b>Feedbacks</b></label>
                                              
                                                   <div style="display:flex;">
                                             
                                       
                                                   <div class="form-group" >
                                                   
                                                       <textarea class="form-control" style="margin-left: 30px;cursor:default;margin-top:10px;padding:2rem" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                                   </div>
                                                                                               
                                               
                                              </div>
                                              <hr>
                                
                                               
                                        
                                              <div style="display:flex;">
                                              
                                              
                                               
                                               </div>
                                               <div class="d-grid gap-2 d-md-block" style="margin-left: 65%;">
                                         
                                                       <a class="btn btn-primary" data-bs-toggle="modal" style="margin-left:5rem" data-bs-target="#rate">Submit</a>
                                   
                                                </div>
                                        
                                       
                                
                                <!--end-->
                                    
                                </div>
                               
                                </form>
                               
                                
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <!-- /.col-lg-12 -->
                           
                       
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
            </div>
        </div>


<div class="modal fade" id="rate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rate Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <label for="b_time" class="form-label" style="margin-left: 10rem; margin-top:10px">Star Rating</label>
                          
                          <div style="margin-left: 12rem; margin-bottom:20px;">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          </div>
                <div class="modal-footer">
                <button type="button" id="yes" class="btn btn-primary" data-bs-dismiss="modal">okay</button>
                
                </div>
               
    </div>
  </div>
</div>

<style>
    .checked {
    color: orange;
    }
    body{
        background-image: url(./img/barber.jpg);
        background-size: 85rem;
    }
</style>

    
                                           
<?php
include "customer-footer.php";
?>