<div class="modal fade" id="add_plant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Plant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add_plant.php" method="post">
        <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="plantname" name="plantname" placeholder="Name">
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="planttype" name="planttype" aria-label="Floating label select example">
                <option selected>None</option>
                <option value="Climbers">Climbers</option>
                <option value="Creepers">Creepers</option>
                <option value="Herbs">Herbs</option>
                <option value="Shrubs">Shrubs</option>
                <option value="Trees">Trees</option>
              </select>
              <label for="floatingSelect">Type</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="plantcolor" name="plantcolor" placeholder="Color">
              <label for="floatingInput">Color</label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="pricerange" name="pricerange" placeholder="Price Range">
              <label for="floatingInput">Price Range</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="plantremarks" name="plantremarks" placeholder="Remarks">
              <label for="floatingInput">Remarks</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>