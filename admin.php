<?php 


include 'header.php';

?>

<!-- Page content -->
<div class="content">
  <p>
  <!--<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  	Post Job
  </button>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" name="cname" >
     </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
    <div class="mb-3">
    <label for="Job Desc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="Job Desc" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
    <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</div>
<table class="table table-success table-striped" style="width: 90%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Job Description</th>
      <th scope="col">Skills</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>

     <?php
     include 'config.php';

     $selectqquery = "SELECT * FROM `jobs`";
     $query = mysqli_query($con,$selectqquery);

 
     while ( $res = mysqli_fetch_array($query)) {
      ?>
      <tr>
      <td><?php echo $res['id']; ?></td>
      <td><?php echo $res['cname']; ?></td>
      <td><?php echo $res['position']; ?></td>
      <td><?php echo $res['Jdesc']; ?></td>
      <td><?php echo $res['skills']; ?></td>
      <td><?php echo $res['CTC']; ?></td>
      <td><i class="fa fa-edit" aria hidden="true"></i></td>
      <td><i class="fa fa-trash" aria hidden="true"></i></td>

    </tr>
    <?php
    }


    ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

