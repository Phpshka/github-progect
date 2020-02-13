<?php 

 require_once "core/init.php";
 if(isset($_SESSION['USER_SESSION'])){
     
    ?> 
     
 <DOCTYPE html>
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
     
     <div class="container mb-5 pb-5">
			<div class="row mt-4">
				<div class="col-6 offset-3">
                    
                    <?php 
     
                        if(isset($_GET['error'])){
                            
                            
                            ?>
                    
                    <div class="alert alert-" role="alert" style="background-color:#FF5349;">
						  Error on profile update
						</div>
                
                          <?php  
                                
                        }
     
                            ?>
                    
                    <?php
     
     if(isset($_GET['success'])){
         
         ?>
                    
                    <div class="alert alert-" role="alert" style="background-color:#45FF3D"> 
						  Profile Saved
						</div>
                    
                    
    <?php 
         
         
     }
     
     
     
     ?>
                    
                    <?php

						$imageBig = "images/default_big.png";

						if($_SESSION['USER_SESSION']['ava']!=null){
							$imageBig = "images/".$_SESSION['USER_SESSION']['ava']."_big.".$_SESSION['USER_SESSION']['ava_type'];
						}

					?>
                    <form action="to_upload_ava.php" method="post" enctype="multipart/form-data" style="">
						<div class="card mb-5 mt-5 col-sm-8 offset-2" style="background-color:#1E1E24; border-color:#FF5349; border-radius:4px;">
						  <img src="<?php echo $imageBig; ?>" class="card-img-top">
						  <div class="card-body">
						    <input type="file" name="ava">
						    <br>
						    <br>
						   <button type="submit" class="btn btn-" style="background-color:#FF5349";>Upload</button>
						  </div>
						</div>
					</form>
     
     <form action="to_change_profile.php" method="post">
					  <div class="form-group" style="color:#FF5349;">
					    <label>Email</label>
					    <input style="background-color:whitesmoke;"  type="email" class="form-control" readonly value="<?php echo $_SESSION['USER_SESSION']['email']; ?>">
     
         </div>
         
         
     
      <div class="form-group" style="color:#FF5349;">
					    <label>Full Name</label>
					    <input style="background-color:whitesmoke;" type="text" class="form-control"placeholder="Full Name" name="full_name" value = "<?php echo $_SESSION['USER_SESSION']['full_name']; ?>">
					  </div>
					  <button type="submit" class="btn btn" style="background-color:#FF5349";>Change Profile</button>
					</form>
					<br><br>
					<form action="to_change_password.php" method="post">
						<div class="form-group" style="color:#FF5349;">
						    <label>Old Password</label>
						    <input style="background-color:whitesmoke;" type="password" class="form-control"placeholder="Old Password" name="old_password">
						</div>
						<div class="form-group" style="color:#FF5349;">
						    <label>New Password</label>
						    <input style="background-color:whitesmoke;" type="password" class="form-control"placeholder="New Password" name="new_password">
					  	</div>
					    <div class="form-group" style="color:#FF5349";>
						    <label>Confirm New Password</label>
						    <input style="background-color:whitesmoke;" type="password" class="form-control"placeholder="Confirm New Password" name="re_new_password">
					  	</div>
					  	<button type="submit" class="btn btn-" style="background-color:#FF5349";>Change Password</button>
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
     
     