<?php 
   session_start();
   if (!isset($_SESSION['email']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style> .btn{
			margin: 10px 60px;
		}
	</style>
</head>
<body>
	   <h2 class="text-center p-3">APPLICATION PROGRAMMING INTERFACE</h2>
	   <h4 class="text-center p-3">Midterm Project</h4>
	   <h5 class="text-center p-3">Group Members: <br> Balanay, Willy Jean <br> Bastillada, Dianne <br> Sumastre, Anna Jean</h5>
	   <center>
		<form class="border shadow p-3 rounded"
      	      action="php/check-login.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>

		  <div class="mb-3">
		    <label for="email" 
		           class="form-label">Email</label>
		    <input type="email" 
		           class="form-control" 
		           name="email" 
		           id="email"
				   required>
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password"
				   required>
		  </div>
		
		  <button type="submit" class="btn btn-primary">LOGIN</button>

		  <a href='register.php' class="btn btn-dark">REGISTER</a>
		</form>
			  </center>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
