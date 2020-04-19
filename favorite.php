<?php
session_start();
include('connection.php');
$userid = 0;
if(isset($_SESSION['userid'])){
$userid = $_SESSION['userid'];
}
$query = "SELECT *,favorites.id FROM favorites INNER JOIN addicecream ON favorites.productid = addicecream.id WHERE favorites.userid=".$userid;
$result = mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>favorite page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php  include('header.php');?>

	
		<div class="main-cart">
			<h1>Favorites</h1>
			<?php
				if(mysqli_num_rows($result)>0){
			 while($row = mysqli_fetch_assoc($result)){ ?>
		<div class="cart-product"  id="cart-<?php echo $row['id']; ?>">
			<div class="cart-inner-div">
				<img src="images/<?php echo $row['imagename'] ?>" class="img-cart">
			</div>
			<div class="cart-inner-div">
				<h3><?php echo $row['name'] ?></h3>
				
				<h4>Price/piece : <?php echo $row['price'] ?></h4>
				<button type="btn" class="remove-cart-button" onclick="remove(<?php echo $row['id'] ?>)">x</button>
				
			</div>

		<hr style="" class="hr-line" />
		</div>
	<?php }}else{
		echo 'no item in favorites';
	}?>
		
		
	</div>
</body>
<script type="text/javascript">
	function remove(id){
		
		document.getElementById('cart-'+id).remove();
		fetch('deleteFromFavorite.php?id='+id
				).then(function(rs){
					rs.json().then(function(rsp){
						if(rsp == 'error'){
						alert('Please login ');
						}else{

							window.reload();
						}
					});
					
				});
	}
</script>
</html>