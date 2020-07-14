<?php include 'includes/adminfunctions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | MiCare</title>
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Assets/all/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/all/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/all/css/login.css">
</head>
<body class="row">
<div class="col-md-4"></div>
<div class="login-form-container col-md-4">
	<form method="post" action="index.php" class="input-form">
	<center><h3>Login</h3></center>
		<?php echo display_error(); ?>
		<label>Username</label>
		<div class="input-group">
			<input type="text" class="form-control" name="username" value="<?php echo $username ?>" 
			style="background-image: url(images/username.png);"placeholder="Username" autocomplete="off">
		</div>
		<label>Password</label>
		<div class="input-group">
			<input type="password" class="form-control" name="password" style="background-image: url(images/password.png);" placeholder="Password" id="myInput">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-primary" name="login_btn" class="form-control">Login</button>
		</div>
			<div class="checkbox" id="checkbox">
			<input type="checkbox" id="show" size="70" class="site-check" onclick="myFunction()"><b>&nbsp;&nbsp;Show password</b>
			<!--<a href="#forgot_password">Forgot password</b><i class="input-helper"></i>-->
			</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></form>
		</div>
	</div>

<script type="text/javascript" src="Assets/all/DataTables-1.10.20/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="Assets/all/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="Assets/all/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#dt').DataTable();
} );
</script>

</body>
</html>


