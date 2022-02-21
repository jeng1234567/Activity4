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
  <div id="page-stylist" style="margin-top: 2px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <div style="display:flex;justify-content:center">
                                <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt=""> 
                                <h1 style="margin-left:1rem;margin-top:1rem"class="page-header">Booking Status</h1>
                            </div>
                            <hr>
                            <br>
                           <div>
                                    <label for="branch">Branch</label>
                                    
                                    <select style="width:10rem;padding: 0.5rem" class="branch" aria-label="Default select example">
                                            <option selected>All</option>
                                            <option value="1">Branch 1</option>
                                            <option value="2">Branch 2</option>
                                            <option value="3">Branch 3 </option>
                                            
                                    </select>
                                   
                                    
                           </div>
                           <br>
                           <div style="display:flex;justify-content:right">
                                   <button style="width:5rem">Search</button>
                                    <input type="text" id="search" style="left:20rem">

                                   
                           </div>
                                
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
                                                    <table class="table table-hover" id="table">
                                                        <thead>
                                                            <th>Booking No.</th>
                                                            <th>Name</th>
                                                            <th>Stylist</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Services</th>
                                                            <th>Total Amount</th>
                                                            <th>Branch</th>
                                                            <th>Home Service</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </thead>

                                                        <tr>
                                                            <td>137</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 1</td>
                                                            <td style="display:flex;justify-content:center; padding-bottom:1.5rem" class="fa fa-check"></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>247</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 3</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 1</td>
                                                            <td></td>
                                                            <td>Canceled</td>
                                                        </tr>
                                                        <tr>
                                                            <td>356</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 3</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 1</td>
                                                            <td style="display:flex;justify-content:center; padding-bottom:1.5rem" class="fa fa-check"></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 2</td>
                                                            <td style="display:flex;justify-content:center; padding-bottom:1.5rem" class="fa fa-check"></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 2</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 3</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 1</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 1</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 1</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 2</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>546</td>
                                                            <td>Macho Gwapo</td>
                                                            <td>stylist 1</td>
                                                            <td>00-00-0000</td>
                                                            <td>00:00</td>
                                                            <td>Face Massage, Footspa, Wax</td>
                                                            <td style="text-align:center">500</td>
                                                            <td>Branch 2</td>
                                                            <td></td>
                                                            <td>Pending</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</a>
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
<div class="modal fade" id="cancel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cancel Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
            
                    <h2 style="margin-left:2rem">
                        Are you sure you want to cancel the booking?
                        </h2>
                        <p style="margin-left:2rem">Leave Message for your customer to know the reason</p>

                        <h3 style="margin-top:20px;margin-left:2rem; ">
                        Message
                        </h3>
                        <br>
                        <textarea style="margin-left:3rem;margin-right:3rem" name="message" id="" style="width:6rem" cols="10" rows="5"></textarea>
                   
               
                    <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
                    
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
    </div>
  </div>
</div>
<script>
  
</script>

<style>
   
  
</style>

    
                                           
<?php
include "admin-footer.php";
?>