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
		<div class="container mt-4 pb-5 mb-5">
            
<?php
            
            
            
            if(isset($_SESSION['USER_SESSION'])&&isset($_GET['id'])&&is_numeric($_GET['id'])){
                
            $blog = getBlogById($_GET['id']);
                
                
                if($blog!=null&&$blog['user_id']==$_SESSION['USER_SESSION']['id']){
                    
                    
                ?>
            
            
         
                <form action="to_saveblog.php" method="post">
				  <input type="hidden" name="id" value="<?php echo $blog['id'];?>">
				  <div class="form-group" style="color:#FF5349;">
				    <label>Title</label>
				    <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo htmlspecialchars($blog['title']);?>">
				  </div>
				  <div class="form-group" style="color:#FF5349;">
				    <label>Short Content</label>
				    <textarea class="form-control" name="short_content" rows="3" style="width: 100%;" placeholder="Short Content"><?php echo htmlspecialchars($blog['short_content']);?></textarea>
				  </div>
				  <div class="form-group" style="color:#FF5349;">
				    <label>Content</label>
				    <textarea class="form-control" name="content" rows="10" style="width: 100%;" placeholder="Content"><?php echo htmlspecialchars($blog['content']);?></textarea>
				  </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save Blog</button>
                        </div>
                    </div>
				  
				</form>
				<br>
            <div>  
				<form action="to_deleteblog.php" method="post">
					<input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
					<button class="btn btn-danger" style="background-color:#FF5349;">Delete Blog</button>
				</form>
            </div>
        
            
			<?php

					}else{
                    	
				?>
            <span style="color:#FF5349; font-size:30px;">BLOG NOT FOUND</span>
				<?php
					}
				?>	
                        			<?php

					}else{
                    	
				?>
                        <span style="color:#FF5349; font-size:30px;">404 PAGE NOT FOUND</span>
				<?php
					}
				?>	       
                
		</div>
	</body>
</html>