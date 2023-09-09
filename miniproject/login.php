<?php 
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play:400,700">
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
  <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-camera-retro fa-5x"></i> 
                </div>
                <div class="col-lg-12 login-title">
                    USER LOGIN
                </div>
                

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                           <div>
                                <p class="bg-success text-white px-4"> <?php 
                                    if(isset($_SESSION["msg"])){
                                        echo $_SESSION['msg'];

                                    }else{
                                        echo $_SESSION['msg']="You are Logged out. Please login again";

                                    }
                                 ?></p>
                           </div>
                        <form action="" name="form1" method="post">
                           
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                               <input type="text" name="username" class="form-control" autocomplete="off" title="please enetr your username" placeholder="User Name" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" autocomplete="off" title="please enetr your password" placeholder="******" required="">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                               <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
								<a class="btn btn-info btn-block loginbtnk" href="register.php">Register</a>

								<div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none;">
  								<strong>Does Not Mathch!</strong> Invalid Username or Password.
								</div>
						
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>


<?php 
if(isset($_POST["login"]))
{       
    

	$count=0;
	$res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]' && status='active'");
	$count=mysqli_num_rows($res);

	if ($count==0) 
	{
		?>
		<script type="text/javascript">
			document.getElementById("failure").style.display="block";
		</script>
		<?php
	}
	
	else{

		$_SESSION["username"]=$_POST["username"];

		?>
		<script type="text/javascript">
			window.location="select_exam.php";
		</script>
		<?php
	
	}
}
?>


</body>
</html>