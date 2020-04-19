<?php
session_start();
include('connection.php');
$userid = 0;
if(isset($_SESSION['userid'])){
$userid = $_SESSION['userid'];
}
$query = "SELECT *,cart.id FROM cart INNER JOIN addicecream ON cart.productid = addicecream.id WHERE cart.userid=".$userid;
$result = mysqli_query($link,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php  include('header.php');?>
		<div class="main-cart">
			<h1>Cart</h1>

			<?php
			if(mysqli_num_rows($result)>0){
			 $total = 0;
			 while ($row=mysqli_fetch_assoc($result)) { ?>
		<div class="cart-product"  id="cart-<?php echo $row['id']; ?>">
			
			
			
			<div class="cart-inner-div">
				<img src="images/<?php echo $row['imagename'] ?>" class="img-cart">
			</div>
			<div class="cart-inner-div">
				<h3><?php echo $row['name'] ?></h3>
				<div class="number">
				<span class="minus" onclick="minus1(<?php echo $row['id']; ?>)">-</span>
				<input type="text" value="<?php echo $row['quantity'] ?>" id="quantity-<?php echo $row['id']; ?>"/>
				<span class="plus" onclick="plus1(<?php echo $row['id']; ?>)">+</span>
				</div>
				<h4 id="price-<?php echo $row['id'];?>">Price/piece : <?php echo $row['price']; ?><input type="hidden" id="priceinput-<?php echo $row['id'] ?>" value="<?php echo $row['price']; ?>"/></h4>
				<button type="btn" class="remove-cart-button" onclick="remove(<?php echo $row['id']; ?>)">x</button>
				
			</div>

		</div>
		<hr style="" class="hr-line" />
		<?php
		$p = $row['quantity']*$row['price'];
		$total = $total + $p;

		 } ?>
		 <form action="checkout.php" method="POST" id="frm">
		<input type="hidden" id="totalinput" name="totalinput" value="<?php echo $total; ?>"/>
	</form>
		<!-- <div class="cart-product"  id="cart2">
			<div class="cart-inner-div" >
				<img src="images/top1.jpg" class="img-cart">
			</div>
			<div class="cart-inner-div">
				<h3>Ice Cream</h3>
				<div class="number">
				<span class="minus" onclick="minus2()">-</span>
				<input type="text" value="1" id="quantity2"/>
				<span class="plus" onclick="plus2()">+</span>
				</div>
				<h4>Price/piece : 50</h4>
				<button type="btn" class="remove-cart-button"  onclick="remove('cart2')">x</button>
				
			</div>
			
		</div> -->
	<!-- <hr class="hr-line"/> -->
	<h2  class="total">Cart Total : <span id="total"><?php echo $total; ?></span></h2>
	<div  class="checkout-div">
	<a href="javascript:void(0)" onclick="submitForm()"><button class="btn checkout-btn">CHECKOUT</button></a>
	</div>
<?php }else{

	echo 'No item in cart';
}?>
	</div>
</body>	
<script type="text/javascript">
	
	var p1 =50;
	var p2 = 50;
	function minus1(id){
				var input = document.getElementById('quantity-'+id).value;
				var count = parseInt(input)-1;
				count = count < 1 ? 1 : count;
				document.getElementById('quantity-'+id).value = count;
				var price = document.getElementById('priceinput-'+id).value;
		var total = document.getElementById('totalinput').value;
		
		
		var total = Number(total)-Number(price);
		document.getElementById('total').innerHTML='';
		document.getElementById('total').innerHTML=total;
		document.getElementById('totalinput').value=total;
		fetch('addQuantity.php?id='+id+'&qty='+count
				).then(function(rs){
					rs.json().then(function(rsp){
						if(rsp == 'error'){
						alert('Please login ');
						}else{

							//window.location.href ='cart.php';
						}
					});
					
				});
		return false;
			}
	function plus1(id){
		var qid = 'quantity-'+id;
		var input = document.getElementById(qid).value;
		var count = parseInt(input)+1;
		count = count < 1 ? 1 : count;
		document.getElementById(qid).value = count;
		var price = document.getElementById('priceinput-'+id).value;
		var total = document.getElementById('totalinput').value;
		
		
		var total = Number(total)+Number(price);
		document.getElementById('total').innerHTML='';
		document.getElementById('total').innerHTML=total;
		document.getElementById('totalinput').value=total;
		fetch('addQuantity.php?id='+id+'&qty='+count
				).then(function(rs){
					rs.json().then(function(rsp){
						if(rsp == 'error'){
						alert('Please login ');
						}else{

							//window.location.href ='cart.php';
						}
					});
					
				});
		return false;
	}
	
	function remove(id){
		var qty = document.getElementById('quantity-'+id).value;
		var price = document.getElementById('priceinput-'+id).value;
		var total = document.getElementById('totalinput').value;
		var p = Number(qty)*Number(price);
		var total = Number(total)-Number(p);
		document.getElementById('total').innerHTML='';
		document.getElementById('total').innerHTML=total;
		document.getElementById('totalinput').value=total;
		document.getElementById('cart-'+id).remove();
		fetch('removefromcart.php?id='+id
				).then(function(rs){
					rs.json().then(function(rsp){
						if(rsp == 'error'){
						alert('Please login ');
						}else{

							//window.location.href ='cart.php';
						}
					});
					
				});
		
	}
	function submitForm(){
		//var qty = document.getElementById('quantity-'+id).value;
		document.getElementById("frm").submit();

	}

</script>
</html>