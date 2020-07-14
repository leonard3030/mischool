<?php include 'header.php'; ?>




<section class="content-section row">
  <div class="col-md-1"></div>
  <div class="card col-md-10 card-info">
    <div class="card-header bg-info row">
      <h5 style="color: #fff;">Manage School Information</h5>
      <div class="table-menu">
        <a href="prico.php" target="_blank" class="btn btn-warning btn-sm">Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">New</button>
      </div>
    </div>
    <div class="card-body">
      <div class="forms row">
        
      <form class="col-md-3">
        <div class="form-group">
          <label>School Name:</label>
          <input type="text" class="form-control" placeholder="Add new school name.."><br>
          <input class="btn btn-info" type="submit" value="Update">
        </div>
      </form>
      <hr>
      <form class="col-md-3">
        <div class="form-group">
          <label>Address:</label>
          <input type="text" class="form-control" placeholder="Add new school address.."><br>
          <input class="btn btn-info" type="submit" value="Update">
        </div>
      </form>
      <hr>
      <form class="col-md-3">
        <div class="form-group">
          <label>P.O Box:</label>
          <input type="text" class="form-control" placeholder="Add new school P.O Box.."><br>
          <input class="btn btn-info" type="submit" value="Update">
        </div>
      </form>
      <hr>
      <form class="col-md-3">
        <div class="form-group">
          <label>Phone:</label>
          <input type="text" class="form-control" placeholder="Add new school phone.."><br>
          <input class="btn btn-info" type="submit" value="Update">
        </div>
      </form>
      <hr>
      <form class="col-md-3">
        <div class="form-group">
          <label>Logo:</label>
          <input type="file" class="form-control" placeholder="Add new school phone.."><br>
          <input class="btn btn-info" type="submit" value="Update">
        </div>
      </form>
      <hr>

      </div>
    </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>