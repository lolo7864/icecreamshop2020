<?php
include('connection.php');
$id = $_GET['id'];
$query = "select * from addicecream where id=".$_GET['id'];
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Details Page
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('header.php'); ?>
	<div class="container">
		<div class="left-div">
			<img src="images/<?php echo $row['imagename'] ?>">
		</div>
		<div class="right-div">
			<h4><?php echo $row['name']; ?></h4>
			
			
			<h4 style="margin:0px !important">Ingredients</h4>
			<p><?php echo $row['ingredients']; ?></p>
			<!-- <ul>
				
				<li>Table cream 2 litres (2 US quarts)</li>
				<li>Instant skim-milk powder 350 ml (1.5 cups)</li>
				<li>Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg</li>
				<li>Egg one med or large,Vanilla 10 ml (2 teaspons)</li>
				<li>Calories per 100 g 230</li>

			</ul> -->
			
				<h4 style="margin:0px !important">Nutrition value</h4>
				<p><?php echo $row['nutrition']; ?></p>
				<!-- <ul>
				
				<li>Total Fat 11 g</li>
				<li>Cholesterol 44 mg</li>
				<li>Sodium 80 mg</li>
				<li>Potassium 199 mg</li>
				<li>Total Carbohydrate 24 g</li>
				<li>Protein 3.5 g</li>
			</ul> -->
			
			
			<p>Expires On : <?php echo $row['expirydate']; ?></p>
			<h5>Discount : <?php echo $row['discount']; ?></h5>
			<h5><?php echo $row['calories']; ?></h5>
			<h4>Price : <?php echo $row['price']; ?></h4>
			<div class="number">
				<span class="minus" onclick="minus()">-</span>
				<input type="text" value="1" id="quantity"/>
				<span class="plus" onclick="plus()">+</span>
			</div>
			<div>
				<ul class="buttons">
					<li><a href="javascript:void(0)" onclick="addToCart(<?php echo $id ?>);"><img src="images/cart.webp"></a></li>
					<li><a href="javascript:void();" onclick="addToFavorite(<?php echo $id ?>)"><img src="images/favorite.png"></a></li>
				</ul>
			</div>
			<div>
				<!-- <form action="addcomment.php" method="POST">
				<textarea rows="3" required="" placeholder="add comment" name="comment" style="width:90%"></textarea>
				<input type="hidden" name="productid" value="<?php echo $id; ?>">
				<button type="submit">Add Comment</button>
				</form> -->
				<ul style="border: 1px solid #ccc;">
					<?php
						$q = 'select * from orderdetail where productid='.$id;;
						$r = mysqli_query($link,$q);
						
						while ($ro = mysqli_fetch_assoc($r)) {
							if($ro['comment']){
							?>
							<li><?php echo $ro['comment'] ?>
							<span><?php 
								$j = $ro['rating'];
									for($i=1; $i<=$j; $i++){
									echo '<img style="width:1rem" src="images/star.jpg"/>';
									
								}
							 ?></span>
						</li>
					<?php	}}
					 ?>
				</ul>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
			function minus(){
				var input = document.getElementById('quantity').value;
				var count = parseInt(input)-1;
				count = count < 1 ? 1 : count;
				document.getElementById('quantity').value = count;
				return false;
			}
			function plus(){
				var input = document.getElementById('quantity').value;
				var count = parseInt(input)+1;
				count = count < 1 ? 1 : count;
				document.getElementById('quantity').value = count;
				return false;
			}
			function addToCart(id){
				var qty = document.getElementById('quantity').value;
				fetch('addtocart.php?id='+id+'&qty='+qty
				).then(function(rs){
					rs.json().then(function(rsp){
						if(rsp == 'error'){
						alert('Please login ');
						}else{

							window.location.href ='cart.php';
						}
					});
					
				});
			}
			function addToFavorite(id){
				fetch('addToFavorite.php?id='+id
				).then(function(rs){
					rs.json().then(function(rsp){
						if(rsp == 'error'){
						alert('Please login ');
						}else{

							window.location.href ='favorite.php';
						}
					});
					
				});
			}
	</script>
</html>