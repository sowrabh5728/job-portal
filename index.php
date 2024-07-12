<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title> JOB PORTAL</title>
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
    <div class="row">
        <div class="col-2">
            <h1>We can help you succeed</h1>
            <p>Success isn't always about greatness. It's about consistency. Consistent hardwork gains success. Greatness will come</p>
            <a href="usser.php" class="btn">Explore Now &#8594;</a>

        </div>
        <div class="col-2">
            <img src="logoo.jpg" width="100%">
            
        </div>
    </div>
</div>
</div>