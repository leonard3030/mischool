<?php include 'header.php'; ?>



<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add new Course</h4>
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
            <label class="col-md-3">Code:</label>
            <input type="text" placeholder="Code..." name="names" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Credits:</label>
            <input type="number" min="1" placeholder="Credits..." name="dob" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Passing :</label>
            <input type="number" min="1" max="100" placeholder="Passing..." name="dob" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Term:</label>
            <select class="form-control col-md-8">
              <option disabled selected>---select---</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group row">
            <label class="col-md-3">Class:</label>
            <select class="form-control col-md-8">
              <option disabled selected>---select---</option>
              <option>L3 CAP</option>
              <option>L4 MAS</option>
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
      <h5 style="color: #fff;">Teachers</h5>
      <div class="table-menu">
        <a href="prite.php" target="_blank" class="btn btn-warning btn-sm">Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">New</button>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-hover table-striped" id="dt">
        <thead>
          <th>ID</th>
          <th>NAMES</th>
          <th>PHONE</th>
          <th>EMAIL</th>
          <th>IDNO</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php 
          for ($i=0; $i <=200 ; $i++) { ?>
            <tr style="padding-bottom: 1px;">
              <td>TEA2018-001</td>
              <td>MUNYAKAZI Gentil</td>
              <td>0788888888</td>
              <td>munyagenti@yahoo.com</td>
              <td>1988789654123654</td>
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