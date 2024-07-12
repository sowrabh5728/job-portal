<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-US-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style >
		body{
			background-image: url("background image2.jpg");
			background-size: cover;
		}
		form{
			background-color: #ffffff;
			margin-top: 6em;
			margin-left: 30em;
			margin-right: 5em;
			margin-bottom: 6em;
			padding: 30px;
			box-shadow: 10px 10px 8px 10px #888888;
			}

			a{
				color: #000000;
				text-decoration: none;

			}

	</style>
	<title>Registration Form</title>
</head>
<body>
    <?php
    include 'config.php';
     
    if (isset($_POST['submit'])){
    	$email = $_POST['email'];
    	$password = $_POST['password'];

    	$email_search = "SELECT * FROM users where email='$email' ";
    	$query = mysqli_query($con, $email_search);

    	$email_count = mysqli_num_rows($query);

    	if ($email_count) {
    	   $email_pass = mysqli_fetch_assoc($query);
    	   $db_pass = $email_pass['password'];	
    	   $pass_decode = password_verify($password, $db_pass);

    	   if($pass_decode){
              echo "login successful";
              ?>

              <script >
              	location.replace("index.php");
              </script>
              <?php

    	   }
    	   else
    	   {
    	   	echo "Password Incorrect";
    	   }
    	   
    	}
    	else
    	   {
    	   	echo "Invalid Email";
    	   }
    }

    ?>

	<div class="container">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="login" class="btn btn-primary" > <a href="index.php" >Login</a> </button>
  
  <br><center>
  New User? 
  <br><a href="register.php">Create Account</a></center>
</form>
	</div>
</body>
</html>
