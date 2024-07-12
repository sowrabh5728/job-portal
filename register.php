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
	</style>
	<title>Registration Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST">
			 <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
   </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text" >We'll never share your email with anyone else.</div>
  </div>
  		 <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2"name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>
	</div>
</body>
</html>

<?php 


include 'config.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];


  $insertquery = "INSERT INTO `users`(`name`, `email`, `phone_no`, `password`) VALUES ('[$name]','[$email]','[$number]','[password]')";

  $res=mysqli_query($con, $insertquery);

  if($res){
    ?>
  

  <script >
    alert('Registration Successful');
  </script>


<?php

   }
   else
   {
      ?>

  <script >
    alert('Registration Unsuccessful');
  </script>


<?php
   }
 }
 ?>