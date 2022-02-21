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
                        <div style="display:flex;justify-content:center">
                            <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt="">
                            <h1 class="page-header" style="margin-top:1rem">Booking History</h1>
                        </div>
                            <br>
                            
                            <hr><br>
                                                    <!-- /.col-lg-12 -->
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <th>Booking No.</th>
                                                            <th>Name</th>
                                                            <th>Stylist</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Other Services</th>
                                                            <th>Branch</th>
                                                            <th>Home Service</th>
                                                            
                                                        </thead>

                                                        <tr class="remove-row">
                                                            <td>137</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td >Face Massage, Wax</td>
                                                            <td>Branch 3</td>
                                                            <td></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove">Delete</a>
                                     
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>247</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 3</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Wax</td>
                                                            <td>Branch 2</td>
                                                            <td></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove">Delete</a>
                                     
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>356</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td>Branch 2</td>
                                                            <td></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove">Delete</a>
                                     
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td>Branch 1</td>
                                                            <td style="display:flex;justify-content:center; padding-bottom:1.5rem" class="fa fa-check"></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove">Delete</a>
                                     
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    
                                            </div>
                                        </div>
                                    </div>
                        <!-- /.col-lg-12 -->
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
                    <h3 style="margin-top:20px;margin-left:2rem; ">
                        Are you sure you want to Delete the record?
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
<Script>
        document.getElementById('yes').addEventListener('click',
            function(){
             document.querySelector('.remove-row').style.display= 'none';
        });
       
    </Script>

    
                                           
<?php
include "customer-footer.php";
?>