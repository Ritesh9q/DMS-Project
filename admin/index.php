<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
<center>
  <div class="col-md-5">
	  <br><br>
	  <img src="images/logo.jpg">
        <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">
                 Admin Login
               </h3>
            </div>
  <div class="panel-body">
    <form action="verify.php" method="post" class = "form-signin" role = "form">
       

   <input type="email" name="email" class = "form-control" name="email"  value="<?php echo @$_COOKIE['email'];?>" placeholder = "Email" required><br>       
      <input type="password" name="password" class = "form-control" name="pwd"  value="<?php echo @$_COOKIE['password'];?>" placeholder = "Password" required><br>

        <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block">
    </form>
   </div> 
 </div>

</div>
</div>

      <p class="mt-5 mb-3 text-muted text-center">&copy; 2021</p>
</center>
</div>

	
</body>
</html>