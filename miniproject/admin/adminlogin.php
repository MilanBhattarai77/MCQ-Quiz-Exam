<?php
session_start();
include "../connection.php";
?>
<!DOCTYPE html>
<html>
<head>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play:400,700">
	<title>Admin Login</title>
	
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
                    ADMIN LOGIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        
                       <form name="form1" action="" method="post">
	 				<div class="form-group">
	 					<label class="form-control-label" style="font-weight: bold;">USERNAME</label>
	 					<input type="text" name="username" class="form-control" placeholder="username" required>
	 				</div>

	 				<div class="form-group">
	 					<label class="form-control-label" style="font-weight: bold;">PASSWORD</label>
	 					<input type="password" name="password" class="form-control" placeholder="*****" required>
	 				</div>
	 				<button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign In</button>
	 					<div class="alert alert-danger" id="errormsg" style="margin-top: 20px; display: none;">
 					 		<strong>Invalid!</strong> Username Or Password
						</div>

				</form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</div>



</body>
</html>
<?php
if(isset($_POST["submit1"]))
{
	$count=0;
	$username=mysqli_real_escape_string($link,$_POST["username"]);
	$password=mysqli_real_escape_string($link,$_POST["password"]);

	$res=mysqli_query($link,"select * from admin_login where username='$username' && password='$password'");
	$count=mysqli_num_rows($res);

	if ($count==0) {
		?>
		<script type="text/javascript">
			document.getElementById('errormsg').style.display="block";
		</script>
		<?php
	}
	else{
		$_SESSION["admin"]=$username;
		

		?>
		<script type="text/javascript">
			window.location="exam_category.php";
		</script>
		<?php
	}

}
?>