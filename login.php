<?php
session_start();
include('connection.php');
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$query = 'select * from users where email="'.$email.'" and password="'.$pwd.'"';
	$result=mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($result);
	if($row){
		$_SESSION['user'] = $row['name'];
		$_SESSION['userid'] = $row['id'];
		header('Location:index.php');
	}
	else{
		$_SESSION['msg'] = 'invalid email address';

	}
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
			
			<h1>Login</h1>
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					$_SESSION['msg'] = '';
				}
			?>
		<form action="" method="POST">
			<label class="label">Email</label>
			<input class="label-input" type="email" name="email" placeholder="Email">
			<label class="label">Password</label>
			<input class="label-input" name="password" type="password" placeholder="Password">
			<div style="text-align: center;">
				<button type="submit" class="btn submit-btn">Submit</button>
			</div>
			<a href="signup.php" style="float: right;margin-top: 15px;margin-bottom: 10px;">Don't have account? Sign Up</a>
		</form>
		
	</div>
</body>
</html>