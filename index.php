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
		<div class="container mt-4">
			<?php

				$blogs = getAllBlogs();
				
				if($blogs!=null){

					foreach($blogs as $blog){

			?>
				<div class="jumbotron" style="background-color:#FF5349";>
				  <h3><?php echo htmlspecialchars($blog['title']);?></h3>
				  <p><?php echo htmlspecialchars($blog['short_content']);?></p>
				  <hr class="my-4">
				  <p>
				  	Posted by: <b><?php echo htmlspecialchars($blog['full_name']); ?></b>
				  	At <?php echo htmlspecialchars($blog['post_date']);?>
				  </p>
				  <a class="btn btn-dark btn-sm" href="readmore.php?id=<?php echo $blog['id'];?>" role="button">Read more</a>
				</div>
			<?php
					}
				}
			?>
            
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script> 

<!— VK Widget —> 
<div id="vk_community_messages"></div> 
<script type="text/javascript"> 
VK.Widgets.CommunityMessages("vk_community_messages", 127607773, {expanded: "1",tooltipButtonText: "Есть вопрос?"}); 
</script>
		</div>
        
        
	</body>
</html>