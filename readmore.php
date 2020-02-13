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
    <div class="container mt-4 pb-5 mb-5"> 
    <?php 

    if(isset($_GET['id'])&&is_numeric($_GET['id'])){ 

    $blog = getBlogById($_GET['id']); 

    if($blog!=null){ 

    ?> 
    <div class="jumbotron" style="background-color:#FF5349";> 
    <h3><?php echo htmlspecialchars($blog['title']);?></h3> 
    <p><?php echo htmlspecialchars($blog['short_content']);?></p> 
    <hr class="my-4"> 
    <p><?php echo htmlspecialchars($blog['content']);?></p> 
    <br> 
    <p> 
    <br> 
    <p> 
    Posted by: 
    <br> 
    <?php 

    $imageSmall = "images/default_small.png"; 

    if($_SESSION['USER_SESSION']['ava']!=null){ 
    $imageSmall = "images/".$blog['ava']."_small.".$blog['ava_type']; 
    } 

    ?> 
    <br> 
    <img src="<?php echo $imageSmall; ?>" style = "border-radius: 50%; margin-right: 10px;"> 

    <b><?php echo htmlspecialchars($blog['full_name']); ?></b> 
    At <?php echo htmlspecialchars($blog['post_date']);?> 
    </p> 
    <br> 
    <?php 
    if(isset($_SESSION['USER_SESSION'])&&$blog['user_id']==$_SESSION['USER_SESSION']['id']){ 
    ?> 
    <a href="editblog.php?id=<?php echo $blog['id'];?>" class = "btn btn-dark btn-sm">EDIT</a> 
    <?php 
    } 
    ?> 
    </div> 
    <?php 
    if(isset($_SESSION['USER_SESSION'])){ 
    ?> 
    <form action="to_addcomment.php" method="post"> 
    <input type="hidden" name="blog_id" value="<?php echo $blog['id']; ?>"> 
    <div class="card" style="width: 100%; background-color:#FF5349";>
    <div class="card-body"> 
    <h5 class="card-title">Add Comment</h5> 
    <p class="card-text"> 
    <textarea class="form-control" name="comment" style="background-color:whitesmoke";></textarea> 
    </p> 
    <button class="btn btn-dark btn-sm">Add Comment</button> 
    </div> 
    </div> 
    </form> 
    <?php 
    }else{ 
    ?> 
    <span style="color:#FFF987; font-size:30px;">To add comments, please authorize</span> 
    <?php 
    } 
    ?> 
    <?php 
    $comments = getAllComments($blog['id']); 
    if($comments!=null){ 
    foreach($comments as $comm){ 
    ?> 
    <div class="card mt-3" style="width: 100%; background-color:#FF5349";> 
    <div class="card-body"> 
    <h5 class="card-title"> 
    <?php echo $comm['full_name']; ?> at <?php echo $comm['post_date']; ?> 
    </h5> 
    <p class="card-text" style=""> 
    <?php 
    echo htmlspecialchars($comm['comment']); 
    ?> 
    </p> 
    </div> 
    </div> 
    <?php 
    } 
    } 
    ?> 
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