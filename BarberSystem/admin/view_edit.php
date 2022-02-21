<div class="modal fade" id="edit_service<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_service.php?id=<?php echo $row['id']; ?>" method="post">
        
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="Service" name="Service" placeholder="Service" value="<?php echo $row['Service']; ?>">
              <label for="Service">Service</label>
            </div>
            </div>

            <!-- <div class="form-floating mb-3">
              <input type="text" class="form-control" id="Stylist" name="Stylist" placeholder="Stylist" value="
              <label for="floatingInput"></label>
            </div> -->
            <div class="modal-body">
              <div class="form-floating mb-3">
              <select id="mylist" onchange="myFunction()" class='form-control' id="Branch" name="Branch" placeholder="Branch" value="<?php echo $row['Branch']; ?>">
                <option ><?php echo $row['Branch']; ?></option>
                <option>Branch 1</option>
                <option>Branch 2</option>
                <option>Branch 3</option>
              </select>
              <label for="Branch">Branch</label>
            </div>
          </div>

            <div class="modal-body">
              <div class="form-floating mb-3">
                <select id="myStylist" onchange="myFunction()" class='form-control' id="Stylist" name="Stylist" placeholder="Stylist" >
                  <option ><?php echo $row['Stylist']; ?></option>
                  <option>Stylist 1</option>
                  <option>Stylist 2</option>
                  <option>Stylist 3</option>
                </select>
                <label for="Stylist">Stylist</label>
              </div>
            </div>

            <div class="modal-body">
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="Price" name="Price" placeholder="Price" value="<?php echo $row['Price']; ?>">
                <label for="Price">Price</label>
              </div>
            </div>
           

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>