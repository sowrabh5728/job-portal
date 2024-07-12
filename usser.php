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
.comp{
    margin: 100-px auto;
    padding-bottom: 75px;
}
.col-5{
    width: 200px;
}
.col-5 img{
    width: 75%;

}

.comp .col-5:hover{
    transform: translateY(-10px);
}

table{
    border-collapse: collapse;
    background-color: #566D7E;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin: auto;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: #fff;
}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{
    font-size: 13px;
    
}
.fa{
    font-size: 18px;
}
.fa-edit{color: #E8E4C9;}
.fa-trash{color: #333;}

</style>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
            <a href="index.php"><img src="logo.png" width="250px"></a>
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
   
    <h2 class="title">Top Companies</h2>
<div class="comp">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="1.png">
            </div>
            <div class="col-5">
                <img src="2.png">
            </div>
            <div class="col-5">
                <img src="c3.png">
            </div>
            <div class="col-5">
                <img src="c4.png">
            </div>
            <div class="col-5">
                <img src="c5.png">
            </div>
        </div>
    </div>
</div>
</div>
</div>


<div class="main-div">
    <h1>List of Jobs Posted</h1>

    <div class="table-responsive">
        <table >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Job Description</th>
      <th scope="col">skills</th>
      <th scope="col">CTC</th>
      <th scope="col">Operation</th>
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
      <td><a href="application.php"><i class="fa fa-edit" aria hidden="true"></i></a></td>
      <td><i class="fa fa-trash" aria hidden="true"></i></td>

    </tr>
    <?php
    }


    ?>

 </tbody>
</table>
    </div>
</div>



</body>
</html>