<?php
//    session_start();
//    include 'db_connect.php';
//    $email = $_SESSION['email'];
//
//    $profile = mysqli_query($con, "SELECT * FROM register WHERE email='{$email}' LIMIT 1");
//    $data = mysqli_fetch_assoc($profile);
//    $data['firstname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Storm-Breakers Health Care | Profile</title>
</head>
<body>
        
    <!-- nav begins -->
    <header>
        <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Storm-Breakers</span> Health Care</h1>
                </div>
                    <nav>
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li class="current"><a href="login.html">PROFILE</a></li>
                            <li><a href="login.html">LOG-OUT</a></li>
                        </ul>
                    </nav>
        </div>
        </header>
    
<br>
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Profile</li>
                </ul>
            </div>
            <div class="col-md-3">
                    <!--  -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Your Profile</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li><a href="#">Account details</a></li>
                                <li><a href="#">Basic information</a></li>
                                <li><a href="#">Personal information</a></li>
                                <li><a href="#">Medication</a></li>
                                <li><a href="#">Allergies</a></li>
                                <li><a href="#">Health background</a></li>
                                <li><a href="#">Survey</a></li>
                            </ul>
                        </div>
            </div>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <h1>Profile</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo eaque doloremque accusantium, quibusdam ipsa earum maxime soluta quasi obcaecati beatae sequi debitis. Optio, nulla repudiandae a fugit nihil quia.</p>
                </div>
                <div class="box">
                    <h1>Profile</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo eaque doloremque accusantium, quibusdam ipsa earum maxime soluta quasi obcaecati beatae sequi debitis. Optio, nulla repudiandae a fugit nihil quia.</p>
                </div>
               
        </div>

     <!-- footer begins -->
     <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h4>Pages</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                        
                        </ul>
        
                        <hr>
        
                        <h4>User Section</h4>
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg hidden-sm">
                    </div>
        
                        
                    <div class="col-sm-6 col-md-3">
                        <h4>Find Us:</h4>
                        <p>
                            <strong>Storm-Breakers Health Care</strong>
                            <br>Lagos
                            <br>Nigeria
                            <br>Storm-Breakers@gmail.com
                            <br>Storm-Breakers
                        </p>
                        <a href="">Check Our Contact Page</a>
                        <hr class="hidden-md hidden-lg">
                    </div>
        
                    <div class="col-sm-6 col-md-3">
                        <h4>Get The News</h4>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
        
                        <form action="" method="">
                            <div class="input-group">
                                <input type="text" name="email" class="form-control">
                                <span class="input-group-btn">
                                    <input type="submit" value="Subscribe" class="btn btn-default">
                                </span>
                            </div>
                        </form>
        
                        <hr>
        
                        <h4>Keep In Touch</h4>
                        <p class="social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google-plus"></a>
                            <a href="#" class="fa fa-envelope"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    
    <!-- footer begins -->
    <footer>
            <div class="container">
                <div>
                    <p class="pull-left">&copy; </p>
                </div>
                
                    <p class="pull-right"> Theme by: Storm-Breakers<a href="#"></a></p>
            
            </div>
        </footer>
</body>
</html>