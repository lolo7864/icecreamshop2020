<div class="navbar">
		<ul class="menus">
			<li><a href="index.php">HOME</a></li>
			<li><a href="adminlogin.php">ADMIN</a></li>
			<li><a href="favorite.php">FAVORITIES</a></li>
			<li><a href="cart.php">CART</a></li>
			<?php if(isset($_SESSION['userid'])){?>
			<li><a href="userlogout.php">LOGOUT</a></li>
			<?php } ?>
			<?php if(!isset($_SESSION['userid'])){?>
			<li><a href="login.php">LOGIN</a></li>
			<?php }?>
			<li><a href="signup.php">SIGNUP</a></li>
		</ul>
	</div>
	<div class="banner">
				<img src="images/banner4.jpg" width="100%" height="550px"/>
			</div>