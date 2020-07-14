<?php include 'header.php'; ?>



<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add new Parent</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form">
          <div class="form-group row">
            <label class="col-md-3">Names:</label>
            <input type="text" placeholder="Names..." name="names" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Gender:</label>
            <select class="form-control col-md-8">
              <option disabled selected>---select---</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="submit" name="" class="btn btn-info">
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





<section class="content-section row">
  <div class="col-md-1"></div>
  <div class="card col-md-10 card-info">
    <div class="card-header bg-info row">
      <h5 style="color: #fff;">Parents</h5>
      <div class="table-menu">
        <a href="pri_par.php" target="_blank" class="btn btn-warning btn-sm">Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">New</button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-hover table-striped" id="dt">
        <thead>
          <th>RegNo</th>
          <th>Student names</th>
          <th>Class</th>
          <th>Parent's names</th>
          <th>Parent's Status</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php 
          for ($i=0; $i <=200 ; $i++) { ?>
            <tr>
              <td>2020-86</td>
              <td>UWAMAHORO Marie Christella</td>
              <td>L3 RCO</td>
              <td>UMULISA Joyeuse</td>
              <td>Guardian</td>
              <td>
                <div class="dropd">
                  <div class="dropd-content">
                    <a href="" class="btn btn-sm btn-info">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </div>
                  <button class="btn btn-sm dropbtn btn-info">Action</button>
                </div>
              </td>
            </tr>
          <?php }
           ?>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>