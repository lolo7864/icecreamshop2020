<?php
session_start();
include('connection.php');
$rs = '';
if(isset($_POST['generate'])){
	// $day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$startdate = '01-'.$month.'-'.$year;
	
	$starttime = strtotime($startdate);
	$startdate = date('Y-m-d',$starttime);
	
	$enddate = '30-'.$month.'-'.$year;
	
	$endtime = strtotime($enddate);
	$enddate = date('Y-m-d',$endtime);
	$query = "Select * From orders where  date >= '".$startdate."' and date <= '".$enddate."' ";
	
	$rs = mysqli_query($link,$query);
	

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
		<div class="monthlyreport">
		<h1>Monthly Reports</h1>
		<form action="" method="POST">
			<div class="dropdowns">
				<div class="rplabel">Month</div>
				<select class="dd" name="month">
					<option value="01">Jan</option>
					<option value="02">Feb</option>
					<option value="03">Mar</option>
					<option value="04">Apr</option>
					<option value="05">May</option>
					<option value="06">Jun</option>
					<option value="07">Jul</option>
					<option value="08">Aug</option>
					<option value="09">Sept</option>
					<option value="10">Oct</option>
					<option value="11">Nov</option>
					<option value="12">Dec</option>
				</select>
			</div>
			<!-- <div class="dropdowns">
				<div class="rplabel">Day</div>
				<select class="dd" name="day">
					<?php for($i=1; $i<=30; $i++) { ?>
						
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					
					<?php } ?>
				</select>
			</div> -->
			<div class="dropdowns">
				<div class="rplabel">Year</div>
				
					<select class="dd" name="year">
						
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						
					</select>
				
			</div>
			<div class="dropdowns">
				<div style="text-align: center;">
				<button type="submit" value="generate" name="generate" class="btn submit-btn">Generate</button>
			</div>
				
			</div>
			</form>

			<table style="width:50%;margin: auto;" border="1">
				<thead>
					<th>
						Name
					</th>
					<th>
						Email
					</th>
					<th>
						Country
					</th>
					<th>
						Price
					</th>
					<th>
						Date
					</th>
				</thead>
				<tbody>
					<?php
						if($rs){
						while($row = mysqli_fetch_assoc($rs)){ ?>
							<tr>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['country']; ?></td>
								<td><?php echo $row['total']; ?></td>
								<td><?php echo $row['date']; ?></td>
							</tr>

						<?php }}
					 ?>
				</tbody>
			</table>
		</div>	
			
		
			
</body>
</html>