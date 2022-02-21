<?php
include "admin-header.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"

        crossorigin="anonymous">

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
                <div class="container-fluiAdmin Dashboard">
                    <div class="row">
                        <div class="col-lg-12">
                        
                            <div style="display:flex;justify-content:center">
                                <img style="padding-top:0.3rem;padding-bottom:0.3rem" width="75rem" height="auto" src="./img/logo.png" alt=""> 
                                <h1 style="margin-left:1rem; margin-top:1.2rem"class="page-header">Stylist</h1>
                            </div>
                            <hr>
                              <br>
           
                              

            <div style="margin-left:3rem" >
                <h5>Select Branch</h5>
                <select id="mylist" onchange="myFunction()" class='form-control' style="width:40%">
                <option value="">All</option>
                <option>Branch 1</option>
                <option>Branch 2</option>
                <option>Branch 3</option>
                </select>
                <br>
                <?php 
                    
                    if(isset($_SESSION['message'])){
                        ?>
                        <div class="alert alert-info text-center" style="margin-top:10px;">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php

                        unset($_SESSION['message']);
                    }
                ?>
                <div class="table-responsive" >
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <th>No.</th>
                            <th>Stylist</th>
                            <th>Service</th>
                            <th>Branch</th>
                            <th>Motto</th>
                            <th>Image</th>
                        </thead>
                        <tbody>
                    
                                    <tr>
                                        <td>34</td>
                                        <td>Stylist 1</td>
                                        <td>Facial , Wax</td>
                                        <td>Branch 1</td>
                                        <td>Change for the Better</td>
                                        <td><img src="./img/stylist.jpg"width="50rem;" height="auto" alt=""></td>
                                       
                                        <td align="right">
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_stylist">Edit</a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_stylist">Delete</a>
                                        </td>

                                    
                                    </tr>

                                    <tr>
                                        <td>35</td>
                                        <td>Stylist 2</td>
                                        <td>Haircut</td>
                                        <td>Branch 3</td>
                                        <td>Change for the Better</td>
                                        <td><img src="./img/stylist.jpg"width="50rem;" height="auto" alt=""></td>
                                       
                                        <td align="right">
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_stylist">Edit</a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_stylist">Delete</a>
                                        </td>
                                        
                                    
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Stylist 2</td>
                                        <td>Wax</td>
                                        <td>Branch 2</td>
                                        <td>Change for the Better</td>
                                        <td><img src="./img/stylist.jpg"width="50rem;" height="auto" alt=""></td>
                                       
                                        <td align="right">
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_stylist">Edit</a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_stylist">Delete</a>
                                        </td>
                                        
                                     
                                    </tr>
                       
                        </tbody>
                    </table>

                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_stylist">Add Service</a>
                   
                                                    <!-- /.col-lg-12 -->          
                        </div>
                        
                    </div>
                </div>
            </div>
<div class="modal fade" id="add_stylist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Stylist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_service.php" method="post">
        <div class="modal-body">
            <div class=" mb-3">
            <label for="Service">Stylist Name</label>
              <input type="text" class="form-control" id="Service" name="Service" placeholder="Stylist">
              
            </div>
          </div>

            <div class="modal-body" >
              <div class=" mb-3" >
              <label for="Stylist">Service</label>
              <br><hr>
                <input type="checkbox" id="vehicle1" name="ser1" value="Service 1">
                <label for="ser1"> Service 1</label><br>
                <input type="checkbox" id="vehicle2" name="ser2" value="Service 2">
                <label for="ser2"> Service 2</label><br>
                <input type="checkbox" id="vehicle3" name="ser3" value="Service 3">
                <label for="ser3"> Service 3</label><br>
                
              </div>
              <hr>
            </div>
            

            <div class="modal-body">
              <div class=" mb-3">
              <label for="Branch">Branch</label>
              <select id="mylist" onchange="myFunction()" class='form-control' id="Branch" name="Branch" placeholder="Branch">
               
                <option>Branch 1</option>
                <option>Branch 2</option>
                <option>Branch 3</option>
              </select>
              
            </div>
          </div>


            <div class="modal-body">
              <div class=" mb-3">
              <label for="Price">Motto</label>
                <input type="text" class="form-control" id="Price" name="Price" placeholder="Motto">
                
              </div>
            </div>
            <div class="modal-body">
              <div class=" mb-3">
              <label for="myFile">Picture</label>
              <br>
                  <input type="file" id="myFile" name="filename">
                
              </div>
            </div>

        <div class="modal-footer">
          <button type="button" name="" data-bs-dismiss="modal" class="btn btn-primary">Add Stylist</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_stylist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Stylist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_service.php" method="post">
        <div class="modal-body">
            <div class=" mb-3">
            <label for="Service">Stylist Name</label>
              <input type="text" class="form-control" id="Service" name="Service" placeholder="Stylist ">
              
            </div>
          </div>

            <div class="modal-body" >
              <div class=" mb-3" >
              <label for="Stylist">Service</label>
              <br><hr>
                <input type="checkbox" id="vehicle1" name="ser1" value="Service 1">
                <label for="ser1"> Service 1</label><br>
                <input type="checkbox" id="vehicle2" name="ser2" value="Service 2">
                <label for="ser2"> Service 2</label><br>
                <input type="checkbox" id="vehicle3" name="ser3" value="Service 3">
                <label for="ser3"> Service 3</label><br>
                
              </div>
              <hr>
            </div>
            

            <div class="modal-body">
              <div class=" mb-3">
              <label for="Branch">Branch</label>
              <select id="mylist" onchange="myFunction()" class='form-control' id="Branch" name="Branch" placeholder="Branch">
               
                <option>Branch 1</option>
                <option>Branch 2</option>
                <option>Branch 3</option>
              </select>
              
            </div>
          </div>


            <div class="modal-body">
              <div class=" mb-3">
              <label for="Price">Motto</label>
                <input type="text" class="form-control" id="Price" name="Price" placeholder="Motto">
                
              </div>
            </div>
            <div class="modal-body">
              <div class=" mb-3">
              <label for="myFile">Picture</label>
              <br>
                  <input type="file" id="myFile" name="filename">
                
              </div>
            </div>

        <div class="modal-footer">
          <button type="button" name="" data-bs-dismiss="modal" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="delete_stylist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Stylist</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h3 style="margin-top:20px;margin-left:2rem; ">
                        Are you sure you want to delete the stylist profile?
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






<style>

</style>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("mylist");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



                                     
<?php
include "admin-footer.php";
?>