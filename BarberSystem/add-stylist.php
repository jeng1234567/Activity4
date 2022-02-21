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
            <li><a href="index.php"><i class="fas fa-table"></i><span>Booking Status</span></a></li>
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
                <div class="container-fluiAdmin Dashboard">
                    <div class="row">
                        <div class="col-lg-12">
                          <br>
                            <h1 style="margin-left:3rem" class="page-header">Stylist</h1>
                            <hr>
                              <br>
            <div style="display:flex;justify-content:right">
                <div>
                
                    <a href="admin-stylist.php"><i></i><span><button style="width:5rem">View</button></span></a>
                    <a href="add-stylist.php"><i></i><span> <button>Add</button></span></a>
                    
                </div>
            </div>
                              

            <div style="margin-left:3rem" >
                <h5>Select Branch</h5>
                <select id="mylist" onchange="myFunction()" class='form-control' style="width:40%">
                <option value="">None</option>
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
                        </thead>
                        <tbody>
                        <?php
                            //include our connection
                            include_once('database.php');

                            $database = new Connection();
                            $db = $database->open();
                            try{	
                                $sql = 'SELECT * FROM services ORDER BY Service ASC';
                                $no = 0;
                                foreach ($db->query($sql) as $row) {
                                    $no++;
                        ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['Stylist']; ?></td>
                                        <td><?php echo $row['Service']; ?></td>
                                        <td><?php echo $row['Branch']; ?></td>
                                        <td align="right">
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_service<?php echo $row['id']; ?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_service<?php echo $row['id']; ?>">Delete</a>
                                        </td>
                                      <?php include('view_delete.php'); ?>
                                        <?php include('view_edit.php'); ?>
                                    </tr>
                        <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "There is some problem in connection: " . $e->getMessage();
                            }

                            //close connection
                            $database->close();

                        ?>
                        </tbody>
                    </table>

                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_service">Add Service</a>
                   
                                                    <!-- /.col-lg-12 -->          
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