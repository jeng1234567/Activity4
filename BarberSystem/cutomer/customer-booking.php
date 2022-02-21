<?php
include "customer-header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
        <nav class="nav1">
          <ul>
            <li><a href="customer-booking.php"><i class="fas fa-table"></i><span>Booking</span></a></li>
            <li><a href="customer-home.php"><i class="fas fa-home"></i><span>Home Service</span></a></li>
            <li><a href="customer-status.php"><i class="fas fa-bookmark"></i><span>Booking Status</span></a></li>
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
  <div class="content" >
    <div id="page-wrapper"  >
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12" class="book">
                           
                            
                        </div>
                        <div  >
                            <br>
                            <div style="display:flex;justify-content:center;">
                                <h1 style="color:white">Book Now</h1>
                            </div>
                        </div>
                        <div class="smart-wrap" style="display:flex;justify-content:center;border-radius:5rem">
                            <div class="smart-forms smart-container wrap-2" style="background-color:white;border-radius:3rem">
                            
                                <div class="form-header header-primary"  style="background-color:grey;display:flex;justify-content:center;">
                                    <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                                    <h2 style="display:flex;justify-content:center;padding:1rem;"><i class="fa fa-scissors"></i><em><b>La Barberia de Jeco</b></em></h2>
                                </div>
                                
                                <form method="post" action="/" id="booking-form">
                                <div class="form-body" style="padding:3rem">
                                
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


                                            <label style="margin-left: 1rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem" for="time">Time</label>
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

                                                <br><br>
       
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
                                                            <button type="button" style="margin-left:3rem; margin-top:10px ;" class="btn btn-danger">Remove</button>

                                                            
                                                </div>


                                                          
                                                
                                        </div>
                                        </div>
                                        
                                       
                                
                                <!--end-->
                                    
                                </div>
                                <hr>
                                <div class="form-footer" style="display:flex;justify-content:center;">
                                    
                                    <a class="btn btn-primary" data-bs-toggle="modal" style="padding:0.5rem;border-radius:0.7rem;" data-bs-target="#success">Confirm Booking</a>
                                    
                                </div>
                                <br>
                                </form>
                               
                                
                            </div>
                        </div>
                        <br>
                        <br>
                                                
                                                    <!-- /.col-lg-12 -->
                          <!--   <div style="">
                                <h1 class="text-center">Book Now</h1>
                                <br>
                                <div class="row" >
                                <div  style="">
                                    
                                    
                                        <label style="margin-left:13rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:1em" for="branch">Branch</label>
                                        <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                                <option selected>Main</option>
                                                <option value="1">Branch 1</option>
                                                <option value="2">Branch 2</option>
                                                <option value="3">Branch 3</option>
                                        </select>
                                        <input type="text" id="b_time" style="cursor:default;width:30%;margin-left:13rem;padding:0.5rem; margin-top:10px;  " class="form-control" placeholder="Tetuan, Zamboanga City" disabled>
                                        <br><br>
                                        <div style="margin-left: 20rem; margin-top:5px;">
                                            <label style="padding:0.7rem;border:solid;color:white;background-color:black;border-radius:1em" for="date">Date</label>
                                            <input style="padding:0.7rem" type="date" id="date"
                                                    name="meeting-time" value=""
                                                    min="2021-04-07" max="2021-07-30">


                                            <label style="margin-left: 1rem;padding:0.7rem;border:solid;color:white;background-color:black;border-radius:1em" for="time">Time</label>
                                                <select style="padding:0.7rem" class="branch" aria-label="Default select example" placeholder="--:-- - --:--">
                                                   
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

                                        </div>
                                            <br>
                                                <button type="button" id="add-s" style="margin-left: 20rem; margin-top:10px;padding:0.7rem;border:solid;color:white;background-color:black;border-radius:1em" class="btn btn-danger" data-bs-dismiss="modal">Add Services +</button>
                                            <div class="add-services">
                                                    <div style="margin-left: 20rem; margin-top:10px;">
                                                            
                                                            <br><br>
                                                            <label  for="branch">Services</label>
                                                                <select class="branch" aria-label="Default select example" style>
                                                                    
                                                                        <option value="1">Service 1</option>
                                                                        <option value="2">Service 2</option>
                                                                        <option value="3">Service 3</option>
                                                                </select>

                                                            </div>
                                                            <div class="form-group" style="margin-left:30px">
                                                            <label style="margin-left:20px" for="comment">Stylist:</label>
                                                                    <form style="border:solid">
                                                                            <div class="form-check" style="border:solid; width: 20rem;margin-left:2rem">
                                                                                    <input class="form-check-input" type="radio" style="margin-left:0.001rem" name="flexRadioDefault" id="flexRadioDefault1">
                                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                                        Any 
                                                                                    </label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" style="margin-left:0.001rem" name="flexRadioDefault" id="flexRadioDefault1">
                                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                                        Stylist 1
                                                                                    </label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" style="margin-left:0.001rem" name="flexRadioDefault" id="flexRadioDefault1">
                                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                                        Stylist 2
                                                                                    </label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" style="margin-left:0.001rem" name="flexRadioDefault" id="flexRadioDefault1">
                                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                                        Stylist 3
                                                                                    </label>
                                                                            </div>
                                                                            <button type="button" class="btn btn-primary btn-md" style="margin-top:2rem; margin-left:18rem;margin-bottom:4rem; width:10rem"id="add-ser">Add Service </button>    
                                                    </div>
                                            </div>

                                                           </form>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form style="background-color:#3d3d3d; border-radius:3%; width:95%">

                                                            <label for="b_location" class="form-label" style="margin-left: 30px;color:white; margin-top:10px" >Branch</label>
                                                            <input type="text" id="b_location" style="cursor:default;width:28rem;margin-left: 30px;" class="form-control" placeholder="Branch 1 : Alfonzo street, Tetuan Zamboanga City" disabled>
                                                            
                                                            <label for="b_date" class="form-label" style="margin-left: 30px;color:white; margin-top:10px">Date</label>
                                                            <input type="text" id="b_date" style="cursor:default;width:30%;margin-left: 30px;" class="form-control" placeholder="April 30, 2021" disabled>

                                                            <label for="b_time" class="form-label" style="margin-left: 30px;color:white; margin-top:10px">Time</label>
                                                            <input type="text" id="b_time" style="cursor:default;width:10rem;margin-left: 30px;" class="form-control" placeholder="1:00 PM- 2:00 PM" disabled>
                                                                <br>
                                                                <label for="b_time" class="form-label" style="margin-left: 30px;color:white; margin-top:10px">Additional Services</label>
                                                           <div style="display:flex;" class="remove1">
                                                          
                                                            <input type="text" id="b_time" style="cursor:default;width:30%;margin-left: 30px; margin-top:10px " class="form-control" placeholder="Service 1" disabled>
                                                            
                                                            <input type="text" id="b_time" style="cursor:default;width:30%;margin-left: 18px; margin-top:10px" class="form-control" placeholder="Stylist 1" disabled>
                                                            
                                                            <a class="btn btn-danger" data-bs-toggle="modal" style="margin-left:20px; margin-top:10px ;" data-bs-target="#remove">Remove</a>
                                                              

                                                            
                                                           </div>

                                                           <div style="display:flex;display:none" class="remove2">
                                                          
                                                                    <input type="text" id="b_time" style="cursor:default;width:30%;margin-left: 30px; margin-top:10px " class="form-control" placeholder="Service 1" disabled>
                                                                    
                                                                    <input type="text" id="b_time" style="cursor:default;width:30%;margin-left: 18px; margin-top:10px" class="form-control" placeholder="Stylist 1" disabled>
                                                                    <button type="button" style="margin-left:20px; margin-top:10px ;" class="btn btn-danger">Remove</button>

                                                            
                                                           </div>

                                                            <div>
                                                            <a class="btn btn-primary" data-bs-toggle="modal" style="margin-left:42%; margin-top:20px ;margin-bottom:30px;text-align: center" data-bs-target="#success">Book Now</a>
                                                              </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                        
                                            
                                        </div>
                                        <br>
                                        <br>-->


                                </div>
                            </div>
                        </div>
<br><br>
            </div>

<div class="modal fade" id="success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Successfully Booked</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                <h3 style="margin-top:20px;margin-left:2rem; ">
                    Thank you for La Choosing Barberia de Jeco.
                </h3>
                <br>
                <h5 style="margin-left:5rem; margin-right:1rem">
                    Kindly check Booking Status for your Details.
                </h5>
                   
                    <br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
    </div>
  </div>
</div>

<div class="modal fade" id="remove" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Remove Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h3 style="margin-top:20px;margin-left:1rem; ">
                        Are you sure you want to remove this service: Haircut
                    </h3>
                <br>
                    <br>
                <div class="modal-footer">
                <button type="button" id="yes" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                
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
                <button type="button" class="btn btn-danger btn-md"  data-bs-dismiss="modal" id="add-ser">Add Service </button>    
            
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
   

                                        
<?php
include "customer-footer.php";
?>