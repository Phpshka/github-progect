<DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Отправка формы на почту </title>

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

  <body style="background-color:#1E1E24">
    
      			
      <div class="container">
			<div class="row mt-4">
				<div class="col-6 offset-3">
					<form action="telegram.php" method="POST">
					  <div class="form-group" style="color:#FF5349;">
					    <label>Name</label>
					    <input  style="background-color:whitesmoke;" type="name" class="form-control" placeholder="Your name" id="" name="name">
					  </div>
					  <div class="form-group" style="color:#FF5349;">
					    <label>Phone</label>
					    <input style="background-color:whitesmoke;" type="number" class="form-control"placeholder="Your number" id="" name="phone">
					  </div>
                        <div class="form-group" style="color:#FF5349;">
					    <label>Email</label>
					    <input style="background-color:whitesmoke;" type="email" class="form-control"placeholder="Your email"  id="" name="email">
					  </div>
					  <button type="submit" class="btn btn-" style="background-color:#FF5349";>Send</button>
					</form>
                    <img src="images/github.png" style="width:50%; margin-left:20%;">
				</div>
			</div>
		</div>
    


   
  </body>
</html>
	
