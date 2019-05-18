<?php
    include 'db_connect.php';

	$firstname = $middlename = $lastname = $email  = $number = $address = $password = $confirmpassword = $agree_terms = "";
    $error = [];
	


	function sanitizeInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = strip_tags($data);
		return $data;
	}	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["firstname"])) {
			$error[] = "First name cant be empty";
		}else{
			$firstname = sanitizeInput($_POST["firstname"]);
			$fullnamePattern = "/^[a-zA-Z ]*$/";
			if (!preg_match($fullnamePattern, $firstname)) {
				$error[] = "Only white spaces and alphabet allowed";
			}
		}
	
		if (empty($_POST["middlename"])) {
			$error[] = "Middlename Can't Be Empty";
		}else{
			$firstname = sanitizeInput($_POST["middlename"]);
			$fullnamePattern = "/^[a-zA-Z ]*$/";
			if (!preg_match($fullnamePattern, $middlename)) {
				$error[] = "Only white spaces and alphabet allowed";
			}
		}

		if (empty($_POST["lastname"])) {
			$error[] = "Lastname Can't Be Empty";
		}else{
			$firstname = sanitizeInput($_POST["lastname"]);
			$fullnamePattern = "/^[a-zA-Z ]*$/";
			if (!preg_match($fullnamePattern, $lastname)) {
				$error[] = "Only white spaces and alphabet allowed";
			}
		}


		if (empty($_POST["email"])) {
			$error[] = "Email Can't Be Empty";
		}else{
			$email = sanitizeInput($_POST["email"]);

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error[] = "Invalid email format";
			}
		}


		if (empty($_POST["number"])) {
			$error[] = "Field Can't Be Empty";
		}else{
			$number = sanitizeInput($_POST["number"]);
			
		}
		if (empty($_POST["address"])) {
			$error[] = "address Can't Be Empty";
		}else{
			$address = sanitizeInput($_POST["address"]);
			
		}


		if (!empty($_POST['password'])) {
			$password = sanitizeInput($_POST['password']);
            $passwordPattern = "#[0-9]+#";
			if (strlen($_POST['password']) < 8) {
				$error[] = "Your Password Is Short";
				$passwordPattern = '#[0-9]+#';
            }
        elseif (!preg_match($passwordPattern, $password)) {
				$error[] = "Password should contain a number atleast";
			}
        }
        else{
			$error[] = "Please enter password";
		}






        if(empty($error)){
            
            $password = md5($password);
            $sql = "insert into register (firstname, middlename, lastname, email, number, address, password) values ('$firstname', '$middlename', '$lastname', '$email', '$number','$address' '$password')";

             //prepare statement
             $stmt = $con->prepare($sql);
            //  $stmt->execute();

             echo "Registration was successfully";
            session_start();
            $_SESSION['email'] = $_POST['email'];
             //Locate page
            header("location: ./dash/dashboard.php");
            $stmt->close();
            $con->close();
        }
    }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name = "viewport" content="width=device-width" scale="1.0">
        <title>Storm-Breakers Health Care</title>
        <link rel= "stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Storm-Breakers</span> Health Care</h1>
                </div>
                    <nav>
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li class="current"><a href="login.html">LOGIN</a></li>
                        </ul>
                    </nav>
            </div>
        </header>
        <section id="newsletter">
                <div class="container">
                    <h1>Subscribe To Our Neswletter</h1>
                    <form action="#">
                        <input type="email" placeholder="Enter Email">
                        <button type="submit" class="button_1">Subscribe</button>
                    </form>
                </div>
            </section>
       <section id="login">
           <div class="regheader">
            <h2>SIGN UP</h2>
           </div>
           <form action="" method="POST" enctype="multipart/form-data" class="form2">
           <?php 
                foreach($error as $err){
                            echo '<li>'.$err.'</li>';
                        }
            ?>
            <div class="input-group">
                        <label>First Name</label>
                           <input type="text" name="firstname" placeholder="First Name">
            </div>
            <div class="input-group">
                    <label>Middle name</label>
                       <input type="text" name="middlename" placeholder="Middle name">
            </div>
            <div class="input-group">
                    <label>Last Name</label>
                       <input type="text" name="lastname" placeholder="Last Name">
            </div>
            
           <div class="input-group">
            <label>E-mail</label>
               <input type="email" name="email" placeholder="name@mail.com">
           </div>
           <div class="input-group">
                <label>Phone Number</label>
                   <input type="tel" name="number" placeholder="Phone number">
            </div>
            <div class="input-group">
                    <label>Address</label>
                       <input type="text" name="address" placeholder="Home Address">
             </div>
           <div class="input-group">
            <label>Create Password</label>
               <input type="password" name="password" placeholder="********">
           </div> 
           <!-- <div class="input-group">
                <label>Confirm Password</label>
                   <input type="password" name="password" placeholder="********">
               </div>
                    <input type="checkbox" name="agree_terms" > I agree to the terms and conditions <br /> -->
           <div class="input-group">
               <button type="submit" name="submit" class="button_1">Sign Up</button>
           </div>


            </form>
        </section>
    </body>

</html>