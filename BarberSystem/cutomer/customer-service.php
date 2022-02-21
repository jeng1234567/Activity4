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
                           
                        <!-- /.col-lg-12 -->
                        </div> 
                        <br>
                       <div style="display:flex;justify-content:center">
                          <img width="300rem" height="auto" src="./img/jeco.png" alt="La Barberia de Jeco logo">    
      
                        </div>
                        
                        <div style="display:flex;justify-content:center; margin-top:2.5rem">
                        
                            <h1>
                                Services
                            </h1>
                        </div>
                        <hr>

                        <div>
                        <label style="margin-left:13rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:1em" for="branch">Branch</label>
                              <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                      <option selected>Main</option>
                                      <option value="1">Branch 1</option>
                                      <option value="2">Branch 2</option>
                                      <option value="3">Branch 3</option>
                              </select>
                        </div>

                        <div style="display:flex;flex-direction:column;text-align:center;justify-content:center; margin-top:2.5rem">
                            <div class="ser" >
                              <h3>
                                Haircut...............................150
                              </h3>
                            </div>

                            <div class="ser">
                              <h3>
                                Faded.................................200
                              </h3>

                            </div>

                            <div>
                              <h3 class="ser">
                                Facial.............................400
                              </h3>

                            </div>
                            <div>
                              <h3 class="ser">
                                Beard Design....................250
                              </h3>

                            </div>
                            <div>
                              <h3 class="ser">
                                Ear Cleaning....................150
                              </h3>

                            </div>
                            <div>
                              <h3 class="ser">
                                Scalp Massage....................200
                              </h3>

                            </div>
                            <div>
                              <h3 class="ser">
                                Groom.........................600
                              </h3>

                            </div>
                             
                             <hr>
                        <div style="display:flex;justify-content:center; margin-top:2.5rem">
                        
                            <h3>
                              <em><b>The Fade Master</b></em>
                            </h3>
                        </div>
                              <br>
                        </div>
                        
                      
                        
                        <!-- /.col-lg-12 -->
                    </div> 
               </div>
        </div>
  </div>

  <style>
    .ser:hover{
     /* background-color:black;
      color:white;*/
      cursor: pointer;

    }
    
    
  </style>
                       
                                           
<?php
include "customer-footer.php";
?>