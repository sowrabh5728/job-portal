<?php
   $email = $_POST['email'];
   $password = $_POST['password'];

   $con = new mysqli("localhost","root","","jobs");
   if($con->connect_error)
   {
   	die("Failed to connect : " .$con->connect_error);
   }
   else
   {
   	$stmt = $con->prepare("select * from users where email = ?");
   	$stmt->bind_param("s", $email);
   	$stmt->execute();
   	$stmt_result = $stmt->get_result();
   	if($stmt_result->num_rows > 0)
   	{
     $data = $stmt_result->fetch_assoc();
     if($data['password']== $password)
     {
     	echo "<h2>Login Successfully</h2>";
     }
     else
     {
     	echo "<h2>Invalid Email or password </h2>";
     }
   	}
   	else
   	{
   		echo "<h2>Invalid Email or password</h2>";
   	}
   }


?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-US-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9daffac6e9.js" crossorigin="anonymous"></script>
    <title>User</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style >
    body{
        background-color: #033E3E;
    }
    
    ul {
  list-style-type: none;
  margin: 0;
  padding: 20;
  overflow: hidden;
  float: right;
  margin-left: 0px;

}

li {
  float: left;
  color: #033E3E;
}

li a {
    color: #033E3E;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #ffffff;
}
.logo{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 300;
        height: 250;
        }
</style>
<body>
    <div class="header">
        <div class="container">
            
            <nav>
            <ul id="MenuItems">
                <li><a href="user.php">Home</a></li>
                <li><a href="index.php">Employer</a></li>
                <li><a href="user.php">Job Seeker</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
            </nav>
               
            
        </div>

        
    </div>
    <div class="logo">
            <a href="user.php"><img src="logoo.jpg" ></a>
        </div>
</body>
</html>



   <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>8LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Google</td>
      <td>Digital Marketing</td>
      <td>18LPA</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Byjus</td>
      <td>HR</td>
      <td>5LPA</td>
    </tr>
