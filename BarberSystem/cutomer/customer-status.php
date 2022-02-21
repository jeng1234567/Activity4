<?php
include "customer-header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
        <nav class="nav1">
          <ul>
            <li><a href="customer-booking.php"><i class="fas fa-table"></i><span>Booking</span></a></li>
            <li><a href="customer-home.php"><i class="fas fa-bookmark"></i><span>Home Service</span></a></li>
            <li><a href="customer-status.php"><i class="fas fa-home"></i><span>Booking Details</span></a></li>
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
  <div id="page-wrapper" style="margin-top: 2px">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                            
                        </div>
                        <div  >
                            <br>
                            <div style="display:flex;justify-content:center;">
                                <h1 style="color:white">Booking Details</h1>
                            </div>
                        </div>
                        <div class="smart-wrap" style="display:flex;justify-content:center;border-radius:5rem">
                            <div class="smart-forms smart-container wrap-2" style="background-color:white;border-radius:3rem">
                            
                                <div class="form-header header-primary"  style="background-color:grey;display:flex;justify-content:center;">
                                    <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                                    <h2 style="display:flex;justify-content:center;padding:1rem;"><i class="fa fa-scissors"></i><em><b>La Barberia de Jeco</b></em></h2>
                                </div>
                                <h3 style="display:flex;justify-content:center;margin-top:1rem">
                                            <b>Home Service</b>
                                        </h3>
                                <form method="post" action="/" id="booking-form">
                                <div class="form-body" style="padding:1.5rem">
                               
                                <!-- OUR FORM ELEMENTS WILL GO HERE --> 
                                <div class="section" >
                                        
                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="branch">Branch</label>
                                        <select class="branch" aria-label="Default select example" style="padding:0.5rem;" disabled>
                                                <option selected>Main : Tetuan, Zamboanga City</option>
                                                <option value="1">Branch 1 : Guiwan, Zamboanga City</option>
                                                <option value="2">Branch 2 : Tumaga, Zamboanga City</option>
                                                <option value="3">Branch 3 : Putik, Zamboanga City</option>
                                        </select>
                                         
                                </div>
                                                    
                                        <div class="frm-row">
                                        <div style="margin-left: 3rem; margin-top:15px;">
                                            <label style="padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="date">Date</label>
                                            <input style="padding:0.4rem" type="date" id="date"
                                                    name="meeting-time" value=""
                                                    min="2021-04-07" max="2021-07-30" disabled>


                                            <label style="margin-left: 1rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="time">Time</label>
                                                <select style="padding:0.5rem" class="branch" aria-label="Default select example" placeholder="--:-- - --:--" disabled>
                                                   
                                                    <option value="9:00 AM- 10:00 AM">9:00 AM- 10:00 AM</option>
                                                    <option value="10:00 AM- 11:00 AM">10:00 AM- 11:00 AM</option>
                                                    <option value="3">11:00 AM- 12:00 PM</option>
                                                    <option value="3">12:00 PM- 1:00 PM</option>
                                                    <option value="1:00 PM- 2:00 PM">1:00 PM- 2:00 PM</option>
                                                    <option value="3">2:00 PM- 3:00 PM</option>
                                                    <option value="3">3:00 PM- 4:00 PM</option>
                                                    <option value="3">4:00 PM- 5:00 PM</option>
                                                    <option value="3">5:00 PM- 6:00 PM</option>
                                                    <option value="3">6:00 PM- 7:00 PM</option>
                                                </select>
                                            
                                          
                                               <div>
                                                    <label for="loc" style="margin-top:15px;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="date">Location</label>
                                                    <input type="text" id="loc" placeholder="Location" style="padding:0.4rem;width:25rem" disabled>

                                               </div>
                                               <label for="person" style="margin-top:15px;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="date">Accomodate</label>
                                                <input type="number" id="person" placeholder="Person to Accomodate" style="padding:0.4rem;width:23.5rem" disabled>

                                               <br>
                                               <br>
                                               <h3>
                                                 Services
                                               </h3>
                                                <hr>
                                                 <div style="display:flex;justify-content:center;" class="remove1">

                                                            <h4 style="margin-top:1rem;">
                                                                Haircut........................150
                                                            </h4>
                                                </div>
                                                


                                                          
                                                
                                        </div>
                                        </div>
                                        
                                       
                                
                                <!--end-->
                                    
                                </div>
                                <hr>
                                <div class="form-footer" style="display:flex;justify-content:center;">
                     
                                    <a class="btn btn-primary" data-bs-toggle="modal" style="padding:0.5rem;border-radius:0.7rem;" data-bs-target="#edit">Edit Booking</a>
                                    <a class="btn btn-danger" data-bs-toggle="modal" style="margin-left:10px;padding:0.5rem;border-radius:0.7rem;" data-bs-target="#cancel">Cancel Booking</a>

                                                
                                   
                                    
                                </div>
                                <br>
                                </form>
                               
                                
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <!-- /.col-lg-12 -->
                           
                        </div>
                            </div>
                        </div>
<br><br>
            </div>

<div class="modal fade"  id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" >
     
      <div class="smart-wrap" style="display:flex;justify-content:center;">
                            <div class="smart-forms smart-container wrap-2" style="background-color:white;">
                            
                                <div class="form-header header-primary"  style="background-color:grey;display:flex;justify-content:center;">
                                    <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                                    <h2 style="display:flex;justify-content:center;padding:1rem;"><i class="fa fa-scissors"></i><em><b>La Barberia de Jeco</b></em></h2>
                                    <button type="button" style="margin-left:6rem;margin-top:1rem" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <h3 style="display:flex;justify-content:center;margin-top:1rem">
                                            <b>Home Service</b>
                                        </h3>
                                <form method="post" action="/" id="booking-form">
                                <div class="form-body" style="padding:1.5rem">
                               
                                <!-- OUR FORM ELEMENTS WILL GO HERE --> 
                                <div class="section" >
                                        
                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="branch">Branch</label>
                                        <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                                <option selected>Main : Tetuan, Zamboanga City</option>
                                                <option value="1">Branch 1 : Guiwan, Zamboanga City</option>
                                                <option value="2">Branch 2 : Tumaga, Zamboanga City</option>
                                                <option value="3">Branch 3 : Putik, Zamboanga City</option>
                                        </select>
                                         
                                </div>
                                                    
                                        <div class="frm-row">
                                        <div style="margin-left: 3rem; margin-top:15px;">
                                            <label style="padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="date">Date</label>
                                            <input style="padding:0.4rem" type="date" id="date"
                                                    name="meeting-time" value=""
                                                    min="2021-04-07" max="2021-07-30">
                                                    <br>


                                            <label style="padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="time">Time</label>
                                                <select style="padding:0.5rem" class="branch" aria-label="Default select example" placeholder="--:-- - --:--">
                                                   
                                                    <option value="9:00 AM- 10:00 AM">9:00 AM- 10:00 AM</option>
                                                    <option value="10:00 AM- 11:00 AM">10:00 AM- 11:00 AM</option>
                                                    <option value="3">11:00 AM- 12:00 PM</option>
                                                    <option value="3">12:00 PM- 1:00 PM</option>
                                                    <option value="1:00 PM- 2:00 PM">1:00 PM- 2:00 PM</option>
                                                    <option value="3">2:00 PM- 3:00 PM</option>
                                                    <option value="3">3:00 PM- 4:00 PM</option>
                                                    <option value="3">4:00 PM- 5:00 PM</option>
                                                    <option value="3">5:00 PM- 6:00 PM</option>
                                                    <option value="3">6:00 PM- 7:00 PM</option>
                                                </select>
                                            
                                          
                                               <div>
                                                    <label for="loc" style="margin-top:15px;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="date">Location</label>
                                                    <input type="text" id="loc" placeholder="Location" style="padding:0.4rem;width:25rem;margin-left:0.4rem">

                                               </div>
                                               <label for="person" style="margin-top:15px;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="date">Accomodate</label>
                                                <input type="number" id="person" placeholder="Person to Accomodate" style="padding:0.4rem;width:23.5rem;margin-left:0.4rem">

                                               <br>
                                               <br>
       
                                                <a class="btn btn-danger" data-bs-toggle="modal" style="margin-left: 1rem; margin-top:10px;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:1em" data-bs-target="#add-service">Add service</a><hr>
                                                <div style="display:flex;" class="remove1">

                                                            <h4 style="margin-top:1rem;margin-left:3rem">
                                                                Haircut........................150
                                                            </h4>
                                                            <a class="btn btn-danger" data-bs-toggle="modal" style="margin-left:3rem; margin-top:10px ;" data-bs-target="#remove">Remove</a>
                                                </div>
                                                <div style="display:flex;display:none;" class="remove2">
                                                          
                                                            <h4 style="margin-top:1rem;margin-left:3rem">
                                                                Facial..........................400
                                                            </h4>
                                                            <button type="button" style="margin-left:2rem; margin-top:10px ;" class="btn btn-danger">Remove</button>

                                                            
                                                </div>


                                                          
                                                
                                        </div>
                                        </div>
                                        
                                       
                                
                                <!--end-->
                                    
                                </div>
                                <hr>
                                <div class="form-footer" style="display:flex;justify-content:center;">
                     
                                    <a class="btn btn-primary" data-bs-toggle="modal" style="padding:0.5rem;border-radius:0.7rem;" data-bs-dismiss="modal" data-bs-target="#">Confirm Booking</a>
                                    
                                   
                                    
                                </div>
                                <br>
                               

                                </form>
                               
                                
                            </div>
                        </div> 
    </div>
  </div>
</div>

<div class="modal fade" id="cancel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cancel Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h3 style="margin-top:20px;margin-left:2rem; ">
                        Are you sure you want to cancel the booking?
                    </h3>
                <br>
                    <br>
                <div class="modal-footer">
                <button type="button" id="" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                
                </div>
    </div>
  </div>
</div>

<div class="modal fade" id="success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Successfully Updated</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                <h3 style="margin-top:20px;margin-left:2rem; ">
                    Thank you for Choosing Barberia de Jeco.
                </h3>
                <br>
               
                   
                    <br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
    </div>
  </div>
</div>

<div class="modal fade" id="add-service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                        <div class="section" >
                            <br>
                                <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="branch">Services</label>
                                <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                        
                                        <option value="1">Haircut................150</option>
                                        <option value="2">Facial................400</option>
                                        <option value="3">Groom..................600</option>
                                </select>
                                    <br><br>

                                <h5 style="margin-left:3rem"><b><em>Available Stylist:</em></b></h5>
                                <div style="margin-left:12rem;">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           <b> Stylist 1</b>
                                        </label>
                                        <br>

                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <b> Stylist 2</b>
                                        </label>
                                        <br>

                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            <b> Stylist 3</b>
                                        </label>
                                </div>
                        </div>
                        <br>
                    
                
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-md"  data-bs-dismiss="modal" id="add-ser">Add Service </button>    
            
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                
                </div>
    </div>
  </div>
</div>
<style>
    body{
        background-image: url(./img/barber.jpg);
        background-size: 85rem;
    }
   
    .remove2{
        
    }
    .add-services{
        display:none;
    }
</style>

<Script>
        document.getElementById('add-ser').addEventListener('click',
            function(){
             document.querySelector('.remove2').style.display= 'flex';
        });
       
    </Script>
    <Script>
        document.getElementById('yes').addEventListener('click',
            function(){
             document.querySelector('.remove1').style.display= 'none';
        });
       
    </Script>

<Script>
        document.getElementById('add-s').addEventListener('click',
            function(){
             document.querySelector('.add-services').style.display= 'flex';
        });
       
    </Script>
   
 </div>


    
                                           
<?php
include "customer-footer.php";
?>