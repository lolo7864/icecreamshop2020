<?php
session_start();
$userid = 0;
if(isset($_POST['totalinput'])){
$_SESSION['total'] = $_POST['totalinput'];
}
if(isset($_SESSION['userid'])){
$userid = $_SESSION['userid'];
}
include('connection.php');
if(isset($_POST['name'])){
	$total = $_SESSION['total'];
	$name = $_POST['name'];
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$country = isset($_POST['country']) ? $_POST['country'] : '';
	$region = isset($_POST['region']) ? $_POST['region'] : '';
	$friendName = isset($_POST['friendName']) ? $_POST['friendName'] : '';
	$friendCountry = isset($_POST['friendCountry']) ? $_POST['friendCountry'] : '';
	$friendRegion = isset($_POST['friendRegion']) ? $_POST['friendCountry'] : '';
	$friendAddress = isset($_POST['friendAddress']) ? $_POST['friendAddress'] : '';
	$notes = isset($_POST['notes']) ? $_POST['notes'] : '';
	$date = date('Y-m-d',time());
	$query = "INSERT INTO orders (`name`,`email`,`country`,`region`,`friendName`,`friendCountry`,`friendRegion`,`friendAddress`,`notes`,`total`,`date`,`userid`) VALUES ('".$name."','".$email."','".$country."','".$region."','".$friendName."','".$friendCountry."','".$friendRegion."','".$friendAddress."','".$notes."','".$total."','".$date."','".$userid."')";
	
	$rs = mysqli_query($link,$query);
	$id = mysqli_insert_id($link);
	
	$q2 = "SELECT * FROM cart WHERE userid=".$userid;
	$r2 = mysqli_query($link,$q2);
	while($row = mysqli_fetch_assoc($r2)){
		$q3 = "INSERT INTO orderdetail (orderid,productid,quantity) VALUES ('".$id."','".$row['productid']."','".$row['quantity']."')";
		$r3 = mysqli_query($link,$q3);
		$q4 = "DELETE FROM cart WHERE id=".$row['id'];
		$r4 = mysqli_query($link,$q4);
	}
	header('Location:rating.php?chkid='.$id);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include('header.php') ?>
	<div class="checkout-container">
		<h1>Checkout</h1>
		<form action="" method="POST">
			<label class="label">Name</label>
			<input class="label-input" name="name" type="text" placeholder="Name">
			<label class="label">Email</label>
			<input class="label-input" name="email"  type="text" placeholder="Email">
			<label class="label">Country</label>
			<input class="label-input" name="country" type="text" placeholder="Country">
			<label class="label">Region</label>
			<input class="label-input" name="region" type="text" placeholder="Region">
			<label class="label"><input type="checkbox" id="check"  onclick="enableTextbox()" />Give as gift to friend </label>
			<label class="label">Name</label>
			<input class="label-input check-input" id="name" name="friendName" type="text" placeholder="Name" disabled="true">
			<label class="label">Country</label>
			<input class="label-input check-input" id="country" name="friendCountry" type="text" placeholder="Country" disabled="true">
			<label class="label">Region</label>
			<input class="label-input check-input" id="region" name="friendRegion" type="text" placeholder="Region" disabled="true">
			<label class="label">Address</label>
			<input class="label-input check-input" id="address" name="friendAddress" type="text" placeholder="Address" disabled="true">
			<input class="label-input check-input" id="check-input" name="notes" type="text" disabled="true" placeholder="write something to friend"/>
			<div style="text-align: center;">
				<button type="submit" class="btn submit-btn">Submit</button>
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function enableTextbox(){
		var check = document.getElementById('check').checked;
		if(check){
			document.getElementById('name').disabled = false;
			document.getElementById('country').disabled = false;
			document.getElementById('region').disabled = false;
			document.getElementById('address').disabled = false;
			document.getElementById('check-input').disabled = false;
		}
		else{
			document.getElementById('name').disabled = true;
			document.getElementById('country').disabled = true;
			document.getElementById('region').disabled = true;
			document.getElementById('address').disabled = true;
			document.getElementById('check-input').disabled = true;
		}
	}
</script>
</html>