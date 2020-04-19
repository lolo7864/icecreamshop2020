<?php
session_start();
$userid = 0;

if(isset($_SESSION['userid'])){
$userid = $_SESSION['userid'];
}

include('connection.php');
if(isset($_POST['rating'])){
	$orderid = $_GET['chkid'];
	$rating = $_POST['rating'];
	$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
	$query = "UPDATE orderDetail SET rating = '".$_POST['rating']."', comment = '".$comment."' WHERE orderid = ".$orderid;
	mysqli_query($link,$query);
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include('header.php') ?>
	<div class="rating-page">
		<h1>Rating</h1>
		<form action="" method="POST">
			<select class="label-input" name="rating">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<textarea rows="4" class="label-input" name="comment" placeholder="add comment"></textarea>
			
			<div style="text-align: center;">
				<button type="submit" class="btn submit-btn">Submit</button>
			</div>
		</form>
	</div>

</body>
</html>