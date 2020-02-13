<?php
	require_once "core/init.php";
	if(isset($_SESSION['USER_SESSION'])){
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
			<div class="col-12">
				<?php
					if(isset($_GET['error'])){
				?>
					<div class="alert alert-" role="alert" style="background-color:#FF5349;">
					  Error on adding blog
					</div>
				<?php
					}
				?>
				<?php
					if(isset($_GET['success'])){
				?>
					<div class="alert alert-" role="alert" style="background-color:#45FF3D">
					  Blog Added
					</div>
				<?php
					}
				?>
                
				<form action="to_addblog.php" method="post">
				  <div class="form-group" style="color:#FF5349;">
				    <label>Title</label>
				    <input type="text" class="form-control" placeholder="Title" name="title"  style="background-color:whitesmoke;">
				  </div>
				  <div class="form-group" style="color:#FF5349;">
				    <label>Short Content</label>
				    <textarea class="form-control" name="short_content" rows="3" style="width: 100%; background-color:whitesmoke;" placeholder="Short Content"></textarea>
				  </div>
				  <div class="form-group" style="color:#FF5349;">
				    <label>Content</label>
				    <textarea class="form-control" name="content" rows="10" style="width: 100%; background-color:whitesmoke;" placeholder="Content"></textarea>
				  </div>
				  <button type="submit" class="btn btn-" style="background-color:#FF5349";>Add Blog</button>
				</form>
           
			</div>
		</div>
		</div>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>