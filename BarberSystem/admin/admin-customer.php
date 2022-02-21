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
                                <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt=""> 
                                <h1 style="margin-left:1rem; margin-top:1.2rem"class="page-header">Customer Information</h1>
                            </div>
                            <hr>
                            <br>
                            <button>Search</button>
                            <input type="text">


                           
                            <br>
                            <br>
                            <!--    <div class="input-group" style="margin-left:100px;">
                                    <div class="form-outline">
                                        <input type="search" id="form1" class="form-control" placeholder="Search" />
                                       
                                    </div >
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>-->
                                                
                                                    <!-- /.col-lg-12 -->
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <th>Customer No.</th>
                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Contact No.</th>
                                                            <th>Email Address</th>
                                                            <th>Password</th>
                                                            
                                                        </thead>

                                                        <tr>
                                                            <td>137</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Lunzuran</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>247</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Putik</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>356</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Guiwan</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Baliwasan</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Tetuan</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Putik</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Guiwan</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Lunzuran</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Putik</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Lunuran</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Tetuan</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>Guiwan</td>
                                                            <td>09123456789</td>
                                                            <td>users12345@gmail.com</td>
                                                            <td>**********</td>
                                                           
                                                        </tr>
                                                    </table>

                                                    <br>
                                                  
                                                    <hr>
                                            </div>
                                        </div>
                                    </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
            </div>

        </div>


    
                                           
<?php
include "admin-footer.php";
?>