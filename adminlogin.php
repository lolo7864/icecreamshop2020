<?php
session_start();
include('connection.php');
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$query = 'select * from admin where email="'.$email.'" and password="'.$pwd.'"';
	$result=mysqli_query($link,$query);
	$row = mysqli_fetch_assoc($result);
	if($row){
		$_SESSION['admin'] = $row['name'];
		header('Location:admin.php');
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
	<?php include('header.php'); ?>
	
	<div class="login-container">
			
			<h1>Admin Login</h1>
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					$_SESSION['msg'] = '';
				}
			?>
		<form method="POST" action="" name="adminLogin">
			
			<label class="label">Email</label>
			<input class="label-input" type="email" id="email" name="email" placeholder="Email" required="">
			<label class="label">Password</label>
			<input class="label-input" id="password" name="password" type="password" placeholder="Password" required="">
			<div style="text-align: center;">
				<button class="btn submit-btn" type="submit">Submit</button>
			</div>
			<!-- <a href="signup.php" style="float: right;margin-top: 5px;">SignUp</a> -->
		</form>
		
	</div>
	<script type="text/javascript">
		function validateLogin(){
			var email  = document.getElementById('email').value;
			var pwd = document.getElementById('password').value;
			if(email=='admin@gmail.com' && pwd=="123456"){
				window.location.href = 'admin.php';
			}
			else{
				alert('Invalid credential');
			}
		}
	</script>
</body>
</html>