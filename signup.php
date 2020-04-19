<?php
session_start();
include('connection.php');
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$query = 'INSERT INTO users (email,password) VALUES ("'.$email.'","'.$pwd.'")';
	$result=mysqli_query($link,$query);
	
	$_SESSION['msg'] = 'Record added successfully';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php  include('header.php');?>
	<div class="login-container">
		
			<h1>Sign Up</h1>
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					$_SESSION['msg'] = '';
				}
			?>
		<form action="" method="POST">
			<label class="label">Email</label>
			<input class="label-input" name="email" type="email" placeholder="Email" required="">
			<label class="label">Password</label>
			<input class="label-input" name="password" type="password" placeholder="Password" required="">
			<div style="text-align: center;">
				<button type="submit" class="btn submit-btn">Submit</button>
			</div>
		</form>
		<a href="login.php" style="float: right;margin-top: 5px;margin-bottom: 10px;">Login</a>
	</div>
</body>
</html>