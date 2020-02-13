<?php
	require_once "core/init.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php
			require_once "core/head.php";
		?>
	</head>
	<body style="background-color:#1E1E24">
		<?php
			require_once "core/navbar.php";
		?>
		<div class="container">
			<div class="row mt-4">
				<div class="col-6 offset-3">
					<?php
						if(isset($_GET['error'])){
					?>
						<div class="alert alert-" role="alert" style="background-color:#FF5349;">
						  Error on registration
						</div>
					<?php
						}
					?>
					<?php
						if(isset($_GET['success'])){
					?>
						<div class="alert alert-" role="alert" style="background-color:#45FF3D">
						  Registration Completed
						</div>
					<?php
						}
					?>
					<form action="to_register.php" method="post">
					  <div class="form-group" style="color:#FF5349;">
					    <label>Email</label>
					    <input style="background-color:whitesmoke;" type="email" class="form-control" placeholder="Email" name="email">
					  </div>
					  <div class="form-group" style="color:#FF5349;">
					    <label>Password</label>
					    <input style="background-color:whitesmoke;" type="password" class="form-control"placeholder="Password" name="password">
					  </div>
					  <div class="form-group" style="color:#FF5349;">
					    <label>Confirm Password</label>
					    <input style="background-color:whitesmoke;" type="password" class="form-control"placeholder="Confirm Password" name="re_password">
					  </div>
					  <div class="form-group" style="color:#FF5349;">
					    <label>Full Name</label>
					    <input style="background-color:whitesmoke;" type="text" class="form-control"placeholder="Full Name" name="full_name">
					  </div>
					  <button type="submit" class="btn btn-" style="background-color:#FF5349";>Sign Up</button>
					</form>
                      <img src="images/github.png" style="width:50%; margin-left:20%;">
				</div>
			</div>
		</div>
	</body>
</html>