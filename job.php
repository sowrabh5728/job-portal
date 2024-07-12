<?php include "header.php" ?>


<div class="content">
	<table class="table table-dark table-hover" style="width: 70%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Qualification</th>
    </tr>
  </thead>
  <tbody>
   <?php
     include 'config.php';

     $selectqquery = "SELECT * FROM `apply`";
     $query = mysqli_query($con,$selectqquery);

 
     while ( $res = mysqli_fetch_array($query)) {
      ?>
      <tr>
      <td><?php echo $res['id']; ?></td>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['phone_no']; ?></td>
      <td><?php echo $res['cname']; ?></td>
      <td><?php echo $res['position']; ?></td>
      <td><?php echo $res['qualification']; ?></td>
     

    </tr>
    <?php
    }


    ?>

  </tbody>
</table>
</div>
<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="job.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>