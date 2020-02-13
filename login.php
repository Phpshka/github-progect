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
	<body style="background-color:#1E1E24";>
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
						  Error on authorization
						</div>
					<?php
						}
					?>
					<form action="to_login.php" method="post">
					  <div class="form-group" style="color:#FF5349;">
					    <label>Email</label>
					    <input  style="background-color:whitesmoke;" type="email" class="form-control" placeholder="Email" name="email">
					  </div>
					  <div class="form-group" style="color:#FF5349;">
					    <label>Password</label>
					    <input style="background-color:whitesmoke;" type="password" class="form-control"placeholder="Password" name="password">
					  </div>
					  <button type="submit" class="btn btn-" style="background-color:#FF5349";>Sign In</button>
					</form>
                    <img src="images/github.png" style="width:50%; margin-left:20%;">
				</div>
			</div>
		</div>
        
        
	</body>
</html>