<?php
session_start();
include('connection.php');
$id = $_GET['id'];
$q = "SELECT price FROM addicecream WHERE id=".$id;
$rs = mysqli_query($link,$q);
$row = mysqli_fetch_assoc($rs);
$qty = $_GET['qty'];
$userid = 0;
if(isset($_SESSION['userid'])){
$userid = $_SESSION['userid'];
}
$checkexist = 'select productid,quantity from cart where productid='.$id;
$rsexist = mysqli_query($link,$checkexist);
$rowexist = mysqli_fetch_assoc($rsexist);
if($rowexist){
	$qty = $rowexist['quantity']+$qty;
$query = "UPDATE cart SET quantity=".$qty." WHERE productid=".$id;
$result = mysqli_query($link,$query);
}
else{
$query = "INSERT INTO cart (productid,quantity,userid,price) VALUES ('".$id."','".$qty."','".$userid."','".$row['price']."')";
$result = mysqli_query($link,$query);
}
echo json_encode('success');
// }
?>