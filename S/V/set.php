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
      <div class="forms">
        
      <div class="p-4 p-md-5 pt-5">


        <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#mysettings">My settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#md">Names</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="#password">Password</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content settings-tab dash-panel">
    <div id="mysettings" class="container tab-pane active">
      <br><center><h3>Manage Account</h3></center><br>
      <form method="post" action="C/settings.php">
            <div class="form-group row none" style="display: none;">
                <label class="col-sm-2 control-label">id:</label>
                <input type="text" name="id" title="subject" value="<?php echo $id?>" placeholder="Title..." class="form-control col-sm-10" required>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Username:</label>
                <input type="text" name="username" title="username" value="<?php echo $user?>" placeholder="username..." class="form-control col-sm-10" required>
            </div>
            <input type="submit" value="Update" name="update_msettings" class="btn btn-primary">
    <br>
</form>
    </div>
    <div id="md" class="container tab-pane">
      <br><center><h3>Manage Names</h3></center><br>
      <form method="post" action="C/settings.php">
            <div class="form-group row none" style="display: none;">
                <label class="col-sm-2 control-label">id:</label>
                <input type="text" name="id" title="subject" value="<?php echo $id?>" placeholder="Title..." class="form-control col-sm-10" required>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Names:</label>
                <input type="text" name="names" title="username" value="<?php echo $names?>" placeholder="username..." class="form-control col-sm-10" required>
            </div>
            <input type="submit" value="Update" name="update_md" class="btn btn-primary">
    <br>
</form>
    </div>
    <div id="password" class="container tab-pane fade">
      <br><center><h3>Change Password</h3></center><br>
      
   <div>
    <form align="center" action="C/settings.php" method="POST" class="form-horizontal" role="form" style="max-width: 500px;">
    <div class="form-group row none" style="display: none;">
    <label class="col-sm-3 control-label">Id:</label>
    <input type="text" name="id" value="<?php echo $id ?>" class="form-control col-sm-9" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-3 control-label">Current Password:</label>
    <input type="password" name="cpass" title="Current Password" placeholder="Current Password..." class="form-control col-sm-9" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-3 control-label">New Password:</label>
    <input type="password" name="npass" title="New Password" placeholder="New Password..." class="form-control col-sm-9" required>
    </div>
    <div class="form-group row">
    <label class="col-sm-3 control-label">Confirm Password:</label>
    <input type="password" name="copass" title="Comfirm Password" placeholder="Confirm Password..." class="form-control col-sm-9" required>
    </div>
                <input type="submit" value="Update" name="update_mpassword" class="btn btn-primary">
</form>
   </div>
    </div>
  </div>

 
      </div>
      </div>
    </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>