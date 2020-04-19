<?php
session_start();
include('connection.php');
$querytopsales = "SELECT addicecream.*,productid,count(*) as count  FROM `orderdetail` INNER JOIN addicecream ON  orderdetail.productid = addicecream.id GROUP by productid order by count DESC LIMIT 3";

$result = mysqli_query($link,$querytopsales);
// $topsales = '';
// while($rowtopsales = mysqli_fetch_assoc($resulttopsales)){
// 	$topsales .= $rowtopsales['productid'].',';
// }
// $topsales = rtrim($topsales,',');
// if($topsales){
// $query = "select * from addicecream where id in (".$topsales.")";
// }else{
// 	$query = "select * from addicecream limit 0,3";
// }
// $result = mysqli_query($link,$query);





$query2 = "select * from addicecream";
$result2 = mysqli_query($link,$query2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<?php include('header.php'); ?>
			
			
			
			<h3 style="font-size:25px;margin-left: 2rem; ">Top Sales</h3>
			<hr>
			<div style="width: 100%;display: inline-block;">
			<?php
				$topsales = '';
				if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					$topsales.=$row['productid'].',';
					?>
					<div class="top-img">
						<a href="details.php?id=<?php echo $row['id']; ?>">
						<img src="images/<?php echo $row['imagename']; ?>">
						
						<p><?php echo $row['name']; ?></p>
						</a>
					</div>
				<?php }}else{
					echo 'No items in Top sales';
				}
			 ?>
			</div>
			
			
			
			
			<h3 style="font-size:25px;margin-left: 2rem;">Lowest Sales</h3>
			<hr>
			<div style="width: 100%;display: inline-block;">
			<?php
				$topsales = rtrim($topsales,',');
				
				
				if($topsales){
					$query1 = "select * from addicecream where id not in (".$topsales.") limit 3";
				
					$result1 = mysqli_query($link,$query1);
				while($row1=mysqli_fetch_assoc($result1)){
					?>
					<div class="top-img">
						<a href="details.php?id=<?php echo $row1['id']; ?>">
						<img src="images/<?php echo $row1['imagename']; ?>">
						
						<p><?php echo $row1['name']; ?></p>
						</a>
					</div>
				<?php }}else{
					echo 'No items in lowest sales';
				}
			 ?>
			</div>
			

			<h3 style="font-size:25px;margin-left: 2rem;">Ice Creams</h3>
			<hr>
			<div style="width: 100%display: inline-block;">
			<?php
					
				while($row2=mysqli_fetch_assoc($result2)){
						
					?>
					<div class="lower-img">
						<a href="details.php?id=<?php echo $row2['id']; ?>">
						<img src="images/<?php echo $row2['imagename']; ?>">
						
						<p><?php echo $row2['name']; ?></p>
						</a>
					</div>
				<?php } 
			 ?>
			</div>
			
			
</body>
</html>