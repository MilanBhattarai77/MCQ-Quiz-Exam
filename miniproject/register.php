<?php
session_start ();
include "connection.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play:400,700">
	<title>Registration</title>
	<style type="text/css">
		body {
    background: #222D32;
    font-family: 'Roboto', sans-serif;
}

.login-box {
    margin-top: 75px;
    height: auto;
    background: #1A2226;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #1A2226;
    color: #ECF0F5;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: #6C6C6C;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}
	</style>

</head>

<body>
	 <?php
// define variables and set to empty values
$fnameErr = $lnameErr = $unameErr =  $passErr = $emailErr=   $mobilenoErr ="";
$fname = $lname =  $uname =  $pass = $email = $mobileno ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $fnameErr = "Firstname is required";
  } else {
    $fname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lastname"])) {
    $lnameErr = "Lastname is required";
  } else {
    $lname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["username"])) {
    $unameErr = "Username is required";
  } else {
    $uname = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9' ]*$/",$uname)) {
      $unameErr = "Only letters and white space allowed";
      }else{
     $count=0;
		$res=mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
		$count=mysqli_num_rows($res);

		if($count>0)
		{
		 $unameErr = "That username already exists.";	
    }
      
    
  }
}
  
    if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/",$pass)) {
      $passErr = "Password must contain 6 characters of letters, numbers and at least one special character.";
    }
  }

    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email)) {
      $emailErr = "Please enter validate Email";
    }
  }

    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = test_input($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    } 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-camera-retro fa-5x"></i> 
                </div>
                <div class="col-lg-12 login-title">
                    USER REGISTRATION
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" name="form1" method="post">
							<div class="row">
								<div class="form-group col-lg-12">
									<label style="color: white;">First Name</label>
									<input type="text" name="firstname" id="firstname" class="form-control" autocomplete="off" placeholder="Enter First Name" value="<?= isset($values["firstname"]) ? $values["firstname"] : "" ?>">
										  <span style="color: orangered;">* <?php echo $fnameErr; ?> </span> 								
									</div>
								<div class="form-group col-lg-12">
									<label style="color: white;">Last Name</label>
									<input type="text" name="lastname" id="lastname" class="form-control" autocomplete="off" placeholder="Enter Last Name"  value="<?= isset($values["lastname"]) ? $values["lastname"] : "" ?>">
										  <span style="color: orangered;">* <?php echo $lnameErr; ?> </span> 								

								</div>
								<div class="form-group col-lg-12">
									<label style="color: white;">User Name</label>
									<input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="Enter UserName"  value="<?= isset($values["username"]) ? $values["username"] : "" ?>">
										  <span style="color: orangered;">* <?php echo $unameErr; ?> </span> 								

								</div>
								<div class="form-group col-lg-12">
									<label style="color: white;">Password</label>
									<input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Enter Password"  value="<?= isset($values["password"]) ? $values["password"] : "" ?>">
										  <span style="color: orangered;">* <?php echo $passErr; ?> </span> 								

								</div>
								<div class="form-group col-lg-12">
									<label style="color: white;">Email</label>
									<input type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="Enter Email"  value="<?= isset($values["email"]) ? $values["email"] : "" ?>">
										  <span style="color: orangered;">* <?php echo $emailErr; ?> </span> 								

								</div>
								<div class="form-group col-lg-12">
									<label style="color: white;">Mobile No</label>
									<input type="text" name="mobileno" id ="mobileno" class="form-control" autocomplete="off" placeholder="Enter Contact"  value="<?= isset($values["mobileno"]) ? $values["mobileno"] : "" ?>">
										  <span style="color: orangered;">* <?php echo $mobilenoErr; ?> </span> 								

								</div>
                                <div><strong><p style="color: blue; padding-left: 50px;">Already Have Account ! &nbsp&nbsp <a style="color: greenyellow;" href="login.php">Log In</a></strong></p></div>
								
							</div>
							<div class="text-center">
								<button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>
								
							</div>
							<div class="alert alert-danger" id ="success" style="margin-top: 10px; display: none;">
  								<strong>Please!</strong> Fill The Above Entities.
							</div>
							<div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
  								<strong>Already Exist!</strong> Fill The Above Entities.
							</div>

						</form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>
	<?php
	if (isset($_POST["submit1"])){
		$count=0;

        $firstname=mysqli_real_escape_string($link,$_POST["firstname"]);
        $lastname=mysqli_real_escape_string($link,$_POST["lastname"]);
        $username=mysqli_real_escape_string($link,$_POST["username"]);
        $password=mysqli_real_escape_string($link,$_POST["password"]);
        $email=mysqli_real_escape_string($link,$_POST["email"]);
        $mobile=mysqli_real_escape_string($link,$_POST["mobileno"]);

         $password = password_hash($password, PASSWORD_BCRYPT);


        $token= bin2hex(random_bytes(15));


		$res=mysqli_query($link,"select * from registration where username='username'") or die(mysqli_error($link));
		$count=mysqli_num_rows($res);
	 
	 if (empty($fnameErr) &&  empty($lnameErr) && empty($unameErr) &&  empty($passErr) && empty($emailErr) && empty($mobilenoErr)) {

      

       	$sql = "INSERT INTO registration(firstname, lastname, username, password, email , contact , token , status) VALUES ('$firstname', '$lastname', '$username', '$password', '$email','$mobile' , '$token' , 'inactive')";
        $query = mysqli_query($link,$sql);

        if ($query) {
            

                $subject="Email Activation";
                $body="Hi, $username. Click here to activate your account http://localhost/miniproject/activate.php?token=$token";
                $sender_email="From: milanbhattaraicr7@gmail.com";


                if (mail($email, $subject , $body, $sender_email)) {
                    $_SESSION['msg']="check your mail to activate your account $email";
                    ?>
                        <script type="text/javascript">
                            window.location="login.php";
                        </script>
                    <?php
                }else{
                    echo "Email sending failed..";
                }

            
        }
     

	 	?>   
 		


             <?php
      
     }
       
    }

	?>
	
</body>
</html>