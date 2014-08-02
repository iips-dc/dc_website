<!DOCTYPE html>
<html>
<head><title>dc Mooc</title></head>
<body>
	<?php  include('date_picker.php');?>
<form action="mooc.php" method="POST" name="myForm" >
	<label>Course Id</label>
	<input type="text" name="course_id"/>
	<br><label>Course Name</label>
	<input type="text" name="course_name"/>
	<br><label>Date of Starting</label>
	<input type="text" name="starting_date" class="datepicker"/>
	<br><label>Name of Provider</label>
	<input type="text" name="provider_name" />	
	<br><label>Link of Course</label>
	<input type="text" name="link" />
	<br><input type="submit" name="submit" value="Submit" >
</form>
</body>
</html>	

<?php
	$con=mysqli_connect("localhost","root","","dc_database");
if(isset($_POST['submit']))
{
	$course_id=mysqli_real_escape_string($con,$_POST['course_id']);
	$course_name=mysqli_real_escape_string($con,$_POST['course_name']);
	$starting_date=mysqli_real_escape_string($con,$_POST['starting_date']);
	$provider_name=mysqli_real_escape_string($con,$_POST['provider_name']);
	$link=mysqli_real_escape_string($con,$_POST['link']);

     $insertQuery=mysqli_query($con,"INSERT INTO  `dc_database`.`moocs` (`course_id`,`course_name` , `starting_date` ,`provider_name` ,`link`)
                   VALUES ('$course_id','$course_name','$starting_date', '$provider_name', '$link')") or die(mysqli_error($con)) ;
  	if($insertQuery){
  		echo "Data Inserted";
  		header('location:mooc.php');
 	}
 }
?>
 <table align ="center" border="1px">
	<tr>
		<td>S.No.</td>
		<td>Course Id</td>
		<td>Course Name</td>
		<td>Starting date</td>
		<td>Name of Provider</td>
		<td>Link of Course</td>
	</tr>
	<?php
$con=mysqli_connect("localhost","root","","dc_database");
	$selectQuery=mysqli_query($con,"SELECT * FROM `moocs`");
	$i=1;
	while($row=mysqli_fetch_array($selectQuery) or die(mysqli_error($con)))
	{
	    echo "<tr>" ;
	    echo "<td>". $i . "</td>";
		echo "<td>". $row[0] . "</td>";
		echo "<td>" .$row[1].  "</td>";
		echo "<td>" .$row[2] . "</td>";
		echo "<td>" .$row[3] . "</td>";
		echo "<td>" .$row[4] . "</td>";
		echo "</tr>";
	
	$i= $i+1;
	}
    ?>	
 </table>


