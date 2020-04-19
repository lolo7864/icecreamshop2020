<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('Location:adminLogin.php');
}

include('connection.php');
if(isset($_POST['name'])){
	$imagename ='';
	
	$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);


if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		
        $imagename =  basename( $_FILES["image"]["name"]);
        
    } else {
        $imagename = "";
    }

	$name = $_POST['name'];
	$ingredients = $_POST['ingredients'];
	$expirydate = $_POST['expirydate'];
	$discount = $_POST['discount'];
	$calories = $_POST['calories'];
	$nutrition = $_POST['nutrition'];
	$price = $_POST['price'];

	$query = 'INSERT INTO addicecream (name,ingredients,expirydate,discount,calories,nutrition,price,imagename) VALUES ("'.$name.'","'.$ingredients.'","'.$expirydate.'","'.$discount.'","'.$calories.'","'.$nutrition.'","'.$price.'","'.$imagename.'")';
	$result=mysqli_query($link,$query);
	header('Location:admin.php');
	$_SESSION['msg'] = 'record added successfully';

	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div class="navbar">
		<ul class="menus">
			<li><a href="admin.php">ADD ICE CREAM</a></li>
			<li><a href="monthlyreport.php">MONTHLY REPORT</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
			
		</ul>
	</div>
	<div class="banner">
				<img src="images/banner4.jpg" width="100%" height="550px"/>
			</div>
			
		<div class="addicecreampage">
		<h1>Add Ice Cream</h1>
		<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					$_SESSION['msg'] = '';
				}
			?>
		<form action="" method="POST" enctype="multipart/form-data">
			<label class="label">Ice cream name</label>
			<input class="label-input" type="text" name="name" placeholder="ice cream name">
			<label class="label">Ingredients </label>
			<input class="label-input" type="text" name="ingredients" placeholder="Ingredients ">
			<label class="label">Expiry date </label>
			<input class="label-input" type="text" name="expirydate" placeholder="Expiry date ">
			<label class="label">Discount </label>
			<input class="label-input" type="text" name="discount" placeholder="Discount ">
			<label class="label">Calories/gram  </label>
			<input class="label-input" type="text" name="calories" placeholder="Calories/gram">
			<label class="label">Nutrition value  </label>
			<input class="label-input" type="text" name="nutrition" placeholder="Nutrition value ">
			<label class="label">Price </label>
			<input class="label-input" type="text" name="price" placeholder="Price">
			<label class="label">Image </label>
			<input class="label-input" type="file" name="image"  placeholder="Price">
			<div style="text-align: center;">
				<button type="submit" class="btn submit-btn">Submit</button>
			</div>
		</form>
	</div>	
			
		
			
</body>
</html>