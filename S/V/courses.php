<?php include 'header.php'; ?>
<section class="content-section row">
  <div class="col-md-1"></div>
  <div class="card col-md-10 card-info">
    <div class="card-header bg-info row">
      <h5 style="color: #fff;">Choose class</h5>
      <div class="table-menu">
      </div>
    </div>
    <div class="card-body">
      <form action="cou.php" class="form-inline">
      	<label>Class:&nbsp;&nbsp;</label>
        <select class="form-control">
          <option>All</option>
          <option>L3 MAS</option>
          <option>L3 CAP</option>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" value="submit" class="btn btn-info">
      </form>
    </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>