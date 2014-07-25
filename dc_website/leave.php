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
		<br><label>Date of coming</label>
		<input type="text" name="coming_date" required="required" class="datepicker">
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
			<th>Id</th>
			<th>Name</th>
			<th>From </th>
			<th>To</th>
			<th>Reason</th>
			<th>Message</th>
			<th>Approve</th>
			<th>Reject</th>
		</tr>	
		<?php
			$con = mysqli_connect('localhost','root','','dc_database');
			$selectQuery=mysqli_query($con,"SELECT * FROM `leave` WHERE approve=0") or die(mysqli_error($con));
			$i=1;
			while($row=mysqli_fetch_array($selectQuery)){
				$id=$row['id'];
				$name=$row['name'];
				$leaving_date=$row['leaving_date'];
				$coming_date=$row['coming_date'];
				$reason=$row['reason'];
				$message=$row['message'];
		?>	
			<tr align="center">
			<td><?php echo $i; ?></td>	
			<td><?php echo $name; ?></td>
			<td><?php echo $leaving_date; ?></td>
			<td><?php echo $coming_date; ?></td>
			<td><?php echo $reason; ?></td>
			<td><?php echo $message; ?></td>
			<td><a href='Approve.php?app=<?php echo $id; ?>'>Approve</a></td> 
			<td><a href='reject.php?app=<?php echo $id; ?>'>Reject</a></td> 
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
			<th>Id</th>
			<th>Name</th>
			<th>From </th>
			<th>To</th>
			<th>Reason</th>
			<th>Message</th>
		</tr>	
		<?php
			$con = mysqli_connect('localhost','root','','dc_database');
			$selectQuery=mysqli_query($con,"SELECT * FROM `leave` WHERE approve=1") or die(mysqli_error($con));
				$i=1;
			while($row=mysqli_fetch_array($selectQuery)){
				$id=$row['id'];
				$name=$row['name'];
				$leaving_date=$row['leaving_date'];
				$coming_date=$row['coming_date'];
				$reason=$row['reason'];
				$message=$row['message'];
		?>	
			<tr align="center">
			<td><?php echo $i; ?></td>	
			<td><?php echo $name; ?></td>
			<td><?php echo $leaving_date; ?></td>
			<td><?php echo $coming_date; ?></td>
			<td><?php echo $reason; ?></td>
			<td><?php echo $message; ?></td>
			</tr>
		<?php
			$i=$i+1;
			}
		?>
	</table>
</body>
</html>

<script>
function allLetter(uname)  
	{   
	var letters = /^[A-Za-z]+$/;  
	if(uname.value.match(letters))  
		{  
		return true;  
		}  
	else  
		{  
	alert('Username must have alphabet characters only');  
	uname.focus();  
	return false;  
		}  
	}  
</script>


<?php
$con = mysqli_connect('localhost','root','','dc_database');
if(isset($_POST['submit']))
{

	$name=mysqli_real_escape_string($con,$_POST['name']);
	$leaving_date=mysqli_real_escape_string($con,$_POST['leaving_date']);
	$coming_date=mysqli_real_escape_string($con,$_POST['coming_date']);
	$reason=mysqli_real_escape_string($con,$_POST['reason']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	$insertQuery = mysqli_query($con,"INSERT INTO `dc_database`.`leave` (name,leaving_date,coming_date,reason,message)
		VALUES ('$name','$leaving_date','$coming_date','$reason','$message')") or die(mysqli_error($con));
	if($insertQuery){
		echo "<script>alert('Record Submitted')</script>";
		header('location:leave.php');
	}
	else
		echo "Not Submitted";		
}		
if(isset($_POST['approve']))
{
	$updateQuery = mysqli_query($con,"UPDATE `leave` SET approve=1 WHERE id='$id'") or die(mysqli_error($con));
}
?>

