<?php
include "admin-header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
        <nav class="nav1">
          <ul>
            <li><a href="admin-status.php"><i class="fas fa-table"></i><span>Booking Status</span></a></li>
            <li><a href="admin-record.php"><i class="fas fa-bookmark"></i><span>Booking Records</span></a></li>
            <li><a href="admin-home.php"><i class="fas fa-home"></i><span>Home Service</span></a></li>
            <li><a href="admin-stylist.php"><i class="fas fa-user"></i><span>Stylist</span></a></li>
            <li><a href="admin-service.php"><i class="fas fa-book"></i><span>Services</span></a></li>
            <li><a href="admin-customer.php"><i class="fas fa-users"></i><span>Customers</span></a></li>
            <li><a href="admin-event.php"><i class="fas fa-calendar"></i><span>Events</span></a></li>
            <li><a href="admin-feedback.php"><i class="fas fa-comment"></i><span>Feedback</span></a></li>
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
        <br>
        <div id="page-stylist" style="margin-top: 2px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                         <div style="display:flex;justify-content:center">
                            <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="85rem" height="auto" src="./img/logo.png" alt=""> 
                            <h1 class="page-header" style="margin-top:1rem;margin-left:1rem">Events</h1>
                         </div>
                            <hr>
                            
                            
                            <br>
                            <br>
                            <div style="margin-left:10em" >
                                <label for="">Message</label>
                                <textarea class="form-control" style="margin-left: 30px;cursor:default;margin-top:10px;width:79%" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                                   

                            </div>
                            <div class="d-grid gap-2 d-md-block" style="margin-left: 50rem;">
                                                        <button class="btn btn-primary" type="button" style="width:40%;margin-top:20px">Send</button>
                                                        
                            </div>
                            <br>
                            <hr>

                            <div class="tab">
                                      <button class="tablinks" onclick="openCity(event, 'London')">Day Off</button>
                                      <button class="tablinks" onclick="openCity(event, 'Paris')">Close</button>
                                      
                                    </div>

                                    <div id="London" class="tabcontent">
                                      <br><br>
                                    <div class="section" >
                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem; width:5rem" for="branch">Branch</label>
                                        <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                                <option selected>Main : Tetuan, Zamboanga City</option>
                                                <option value="1">Branch 1 : Guiwan, Zamboanga City</option>
                                                <option value="2">Branch 2 : Tumaga, Zamboanga City</option>
                                                <option value="3">Branch 3 : Putik, Zamboanga City</option>
                                        </select>
                                        <br>

                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem;width:5rem" for="branch">Stylist</label>
                                        <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                                <option selected>Stylist 1</option>
                                                <option value="1">Stylist 2</option>
                                                <option value="2">Stylist 3</option>
                                                
                                        </select>
                                        <br>
                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem;width:5rem" for="date">Date</label>
                                            <input style="padding:0.4rem" type="date" id="date"
                                                    name="meeting-time" value=""
                                                    min="2021-04-07" max="2021-07-30">

                                                    <br><br>
                                                    <div style="display:flex;justify-content:right;">
                                                        <button class="btn btn-primary" type="button" style="width:6rem;margin-top:20px">Set</button>
                                                    </div>
                                        <br><br><br>
                                        
                                        
                                </div>
                                    </div>

                                    <div id="Paris" class="tabcontent">
                                    <br><br>
                                    <div class="section" >
                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem; width:5rem" for="branch">Branch</label>
                                        <select class="branch" aria-label="Default select example" style="padding:0.5rem;">
                                                <option selected>Main : Tetuan, Zamboanga City</option>
                                                <option value="1">Branch 1 : Guiwan, Zamboanga City</option>
                                                <option value="2">Branch 2 : Tumaga, Zamboanga City</option>
                                                <option value="3">Branch 3 : Putik, Zamboanga City</option>
                                        </select>
                                       

                                       
                                        <br>
                                        <label style="margin-left:3rem;padding:0.5rem;border:solid;color:white;background-color:black;border-radius:0.5rem;width:5rem" for="date">Date</label>
                                            <input style="padding:0.4rem" type="date" id="date"
                                                    name="meeting-time" value=""
                                                    min="2021-04-07" max="2021-07-30">

                                                    <br><br>
                                                    <div style="display:flex;justify-content:right;">
                                                        <button class="btn btn-primary" type="button" style="width:6rem;margin-top:20px">Set</button>
                                                    </div>
                                        <br><br><br>
                                        
                                        
                                </div>
                                    </div>
                                    </div>

                                    <div id="Tokyo" class="tabcontent">
                                      <h3>Tokyo</h3>
                                      <p>Tokyo is the capital of Japan.</p>
                                    </div>
                                   


   
                                    
                                                    <!-- /.col-lg-12 -->          
                        </div>
                       
                    </div>
                </div>
                <br><br><br>
            </div>
    </div>
    
    <style>


/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
    
                                           
<?php
include "admin-footer.php";
?>