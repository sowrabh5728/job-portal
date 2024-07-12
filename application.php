<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title> JOB PORTAL </title>
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
  
</head>
<style >
    body{
        background-color: #C9DFEC;
    }

.navbar{
    display: flex;
    align-items: center;
    padding:0px;
    padding-top: 0;

}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;

}
nav ul li{
    display: inline-block;
    margin-top: 0px;
    margin-right: 5px;
    color: #ffffff;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;
}

.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2 img{
    max-width: 100%;
    padding: 50px 0;

}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25 0;
}
.btn{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.btn:hover{
    background: #563434;
}
.main-block {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
min-height: 100vh;
background: #1c87c9;
}
form {
padding: 25px;
margin: 25px;
box-shadow: 0 2px 5px #f5f5f5; 
background: #f5f5f5; 
}


h1 {
margin: 0 0 20px;
font-weight: 400;
color: #1c87c9;
}
p {
margin: 0 0 5px;
}
input, textarea {
width: calc(100% - 18px);
padding: 8px;
margin-bottom: 20px;
border: 1px solid #1c87c9;
outline: none;
}
input::placeholder {
color: #666;
}
button {
width: 100%;
padding: 10px;
border: none;
background: #1c87c9; 
font-size: 16px;
font-weight: 400;
color: #fff;
}
button:hover {
background: #2371a0;
} 


</style>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
            <img src="logo.png" width="250px">
        </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Employer</a></li>
                <li><a href="usser.php">Job Seeker</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Account</a></li>
            </ul>
        </nav>
    </div>

</div>
</div>
<div class="main-block">
<form action="" method="POST">
<h1>APPLY</h1>
<div class="info">
<input class="fname" type="text" name="name" placeholder="Full name">
<input type="text" name="email" placeholder="Email">
<input type="text" name="phone" placeholder="Phone number">
<input type="text" name="cname" placeholder="Company Name">
<input type="text" name="position" placeholder="Position">
<input type="text" name="qualification" placeholder="Qualification">
</div>

<button type="submit" name="submit"> Submit</button>
</form>
</div>

</body>
</html>


<?php 


include 'config.php';

if(isset($_POST['submit'])){
  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $Phone_no=$_POST['phone'];
  $Cname=$_POST['cname'];
  $Position=$_POST['position'];
  $Qualification=$_POST['qualification'];

  $insertquery = "INSERT INTO `apply`(`name`, `email`, `phone_no`, `cname`, `position`,`qualification`) VALUES ('[$Name]','[$Email]','[$Phone_no]','[$Cname]','[$Position]','[$Qualification]')";

  mysqli_query($con, $insertquery);

  
 }
 ?>



