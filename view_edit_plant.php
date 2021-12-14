<div class="modal fade" id="edit_plant<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit New Plant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_plant.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="plantname" name="plantname" placeholder="Name" value="<?php echo $row['plant_name']; ?>">
              <label for="floatingInput"></label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="planttype" name="planttype" aria-label="Floating label select example" value="<?php echo $row['plant_type']; ?>">
                <option selected><?php echo $row['plant_type']; ?></option>
                <option value="Climbers">Climbers</option>
                <option value="Creepers">Creepers</option>
                <option value="Herbs">Herbs</option>
                <option value="Shrubs">Shrubs</option>
                <option value="Trees">Trees</option>
              </select>
              <label for="floatingSelect"></label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="plantcolor" name="plantcolor" placeholder="Color" value="<?php echo $row['color']; ?>">
              <label for="floatingInput">Color</label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="pricerange" name="pricerange" placeholder="Price Range" value="<?php echo $row['price_range']; ?>">
              <label for="floatingInput">Price Range</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="plantremarks" name="plantremarks" placeholder="Remarks" value="<?php echo $row['remarks']; ?>">
              <label for="floatingInput">Remarks</label>
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