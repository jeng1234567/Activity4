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
    <div id="page-wrapper" style="margin-top: 2px">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-lg-12">
                          
                          
                        </div>
                        <br>
                       <div style="display:flex;justify-content:center">
                          <img width="300rem" height="auto" src="./img/jeco.png" alt="La Barberia de Jeco logo">    
      
                        </div>
                        
                        <div style="display:flex;justify-content:center; margin-top:2.5rem">
                        
                            <h1>
                                Stylist
                            </h1>
                        </div>
                        <hr>

                        <div>
                        <label style="margin-left:5rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:1em" for="branch">Branch</label>
                              <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                      <option selected>Main</option>
                                      <option value="1">Branch 1</option>
                                      <option value="2">Branch 2</option>
                                      <option value="3">Branch 3</option>
                              </select>
                        </div>
                        <div style="display:flex;flex-direction:column;text-align:center;justify-content:center; margin-top:3rem;margin-left:3rem">
                          <div style="">
                                <div class="card" style="border-radius:3%;display:flex;flex-direction:column;text-align:center;justify-content:center; margin-top:3rem;margin-left:20rem" >
                                  <div style="margin-top:2.5rem">
                                      <img width="200rem" heigth="auto" src="./img/stylist.jpg" alt="Avatar" >
                                  </div>
                                  <div class="container">
                                    <h4><b>Stylist 1</b></h4> 
                                    <p>Change for the Better</p> 
                                  </div>
                                  <div class="dropdown-content " style="flex-direction:column;text-align:center;justify-content:center;margin-left:17rem" >
                                    
                                      <div class="desc" >
                                            <h4 style="margin-top:1rem"><em><b>Specialize</b></em></h4>
                                            <hr>
                                            <div>
                                              Haircut <br>
                                              facial 
                                              <br>
                                              Groom
                                              
                                                
                                            </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="card" style="border-radius:3%;display:flex;flex-direction:column;text-align:center;justify-content:center; margin-top:3rem;margin-left:20rem">
                                  <div style="margin-top:2.5rem">
                                      <img width="200rem" heigth="auto" src="./img/stylist.jpg" alt="Avatar" >
                                  </div>
                                  <div class="container">
                                    <h4><b>Stylist 2</b></h4> 
                                    <p>Change for the Better</p> 
                                  </div>
                                  <div class="dropdown-content " style="flex-direction:column;text-align:center;justify-content:center;margin-left:17rem" >
                                    
                                      <div class="desc" >
                                            <h4 style="margin-top:1rem"><em><b>Specialize</b></em></h4>
                                            <hr>
                                            <div>
                                              Haircut <br>
                                              facial 
                                              <br>
                                              Groom
                                              
                                                
                                            </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="card" style="border-radius:3%;display:flex;flex-direction:column;text-align:center;justify-content:center; margin-top:3rem;margin-left:20rem">
                                  <div style="margin-top:2.5rem">
                                      <img width="200rem" heigth="auto" src="./img/stylist.jpg" alt="Avatar" >
                                  </div>
                                  <div class="container">
                                    <h4><b>Stylist 3</b></h4> 
                                    <p>Change for the Better</p> 
                                  </div>
                                  <div class="dropdown-content " style="flex-direction:column;text-align:center;justify-content:center;margin-left:17rem" >
                                    
                                      <div class="desc" >
                                            <h4 style="margin-top:1rem"><em><b>Specialize</b></em></h4>
                                            <hr>
                                            <div>
                                              Haircut 
                                              <br>
                                              facial 
                                              <br>
                                              Groom
                                              
                                                
                                            </div>
                                      </div>
                                  </div>
                                </div>
                          </div>
                         
                        </div>
                        
                        <!-- /.col-lg-12 -->
                        
                                                          
                    </div>
                    <br>
                        <br>
                        <hr>              
                </div>
            </div>

        </div>

       


</div>
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

/*hover*/
.dropdown {
  position: relative;
  display: flex;
}

.dropdown-content {
  
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  opacity:90%;
  border-radius:3%;
  
  
}

.card:hover .dropdown-content {
  display: block;
  
  
}

.desc {
 color:white;
}

</style>
    
                                           
<?php
include "customer-footer.php";
?>