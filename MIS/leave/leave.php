<!DOCTYPE html>
<html>
<head>
	<title>Leave System</title>
</head>
<body>
	<?php  include('date_picker.php');?>
	<form action="leave.php" method="POST">
		<label>Name</label>
		<input type="text" required="required" required="alphabetic_space" placeholder="Enter Name" name="name" >
		<br><label>Date of leaving</label>
		<input type="text" name="leaving_date" required="required"  class="datepicker">
		<br><label>Date of Returning</label>
		<input type="text" name="coming_date" required="required" class="datepicker">
		<br><label>Leave type</label>
		<select value="type" name="type">
			<option>Sick Leave</option>
			<option>Recreation</option>
			<option>Festival</option>
		</select>
		<br><label>Reason</label>
		<input type="text" name="reason" placeholder="Enter Reason" required="required">
		<br><label>Message</label>
		<input type="text" name="message" placeholder="Enter Message">
		<input type="submit" name="submit" value="Submit" >
	</form>	
	<form method="POST">
	<table width="600px" align="center" border="5px">
		<center> <h1>Not Approved</h1></center>
		<tr>
			<th>S.No.</th>
			<th>Name</th>
			<th>From </th>
			<th>To</th>
			<th>Leave Type</th>
			<th>Reason</th>
			<th>Message</th>
			<th>Leave Status</th>
			<th>Approve</th>
			<th>Reject</th>
		</tr>	
		<?php
			$con = mysqli_connect('localhost','root','pulkit5-1','dc_database');
                             # Select query to fetch all pending requests
			
			$selectQuery=mysqli_query($con,"SELECT * FROM `leave` WHERE approve=0") or die(mysqli_error($con));
			$i=1;
			while($row=mysqli_fetch_array($selectQuery)){

		?>	
			<tr align="center">
			<td><?php echo $i; ?></td>	
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><?php echo $row[6]; ?></td>
			<td><?php 
				if($approve==1)
			  	  echo "approved";
				if($approve==-1)
					echo "Rejected";
				if($approve==0)
					echo "Pending";
				 ?></td>
			<td><a href='approve.php?app=<?php echo $row[0]; ?>'>Approve</a></td> 
			<td><a href='reject.php?app=<?php echo $row[0]; ?>'>Reject</a></td> 
			</tr>
		<?php
		$i=$i+1;
			}		
		?>
	</table>
	</form>	


	<table width="600px" align="center" border="5px">
		<center><h1> Approved</h1></center>
		<tr>
			<th>S.No.</th>
			<th>Name</th>
			<th>From </th>
			<th>To</th>
			<th>Leave Type</th>
			<th>Reason</th>
			<th>Message</th>
			<th>Leave Status</th>
		</tr>	
		<?php
						# Select query to fetch all Approved requests
						
			#$con = mysqli_connect('localhost','root','','dc_database');
			$selectQuery=mysqli_query($con,"SELECT * FROM `leave` WHERE approve=1") or die(mysqli_error($con));
				$i=1;
			while($row=mysqli_fetch_array($selectQuery)){
					
		?>	
			<tr align="center">
			<td><?php echo $i; ?></td>	
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><?php echo $row[6]; ?></td>
			<td><?php 
			if($approve==1)
			    echo "approved";
			if($approve==-1)
				echo "Rejected";
			if($approve==0)
				echo "Pending";

			 ?></td>
			</tr>
		<?php
			$i=$i+1;
			}
		?>
	</table>
	<?php include('../../footer.html');?>
</body>
</html>


<?php
#$con = mysqli_connect('localhost','root','','dc_database');
if(isset($_POST['submit']))     //   Insert data if submit button is clicked 
{
	$type=mysqli_real_escape_string($con,$_POST['type']);
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$leaving_date=mysqli_real_escape_string($con,$_POST['leaving_date']);
	$coming_date=mysqli_real_escape_string($con,$_POST['coming_date']);
	$reason=mysqli_real_escape_string($con,$_POST['reason']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	$insertQuery = mysqli_query($con,"INSERT INTO `dc_database`.`leave` (name,leaving_date,coming_date,type,reason,message)
		VALUES ('$name','$leaving_date','$coming_date','$type','$reason','$message')") or die(mysqli_error($con));
	if($insertQuery){
		echo "<script>alert('Record Submitted')</script>";
		header('location:leave.php');
	}
	else
		echo "Not Submitted";		
}		
?>

