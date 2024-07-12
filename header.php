<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-US-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9daffac6e9.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Dashboard</title>
</head>

<body>
    <div>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       
      </ul>
    </div>
  </div>
</nav><div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="job.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">
  ..
</div>

<?php 


include 'config.php';

if(isset($_POST['submit'])){
  $Company_name=$_POST['cname'];
  $Position=$_POST['pos'];
  $Job_desc=$_POST['Jdesc'];
  $Skills_req=$_POST['skills'];
  $CTC=$_POST['CTC'];

  $insertquery = "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`,`CTC`) VALUES ('[$Company_name]','[$Position]','[$Job_desc]','[$Skills_req]','[$CTC]')";

  mysqli_query($con, $insertquery);

  
 }
 ?>