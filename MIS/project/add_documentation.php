<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<!--<script type="text/javascript" src="MyFormValidation.js" ></script>-->
<script>

 

function onlyNumbers(event)				
{
    	var e =event; 
   	var charCode = e.which || e.keyCode;

    		if ((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 37 || charCode == 39 || charCode == 9) 
       			 return true;
			else
				 return false;

}

function onlyChars(event)
{
  var e =event;
  var charCode = e.which || e.keyCode;
  if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9 || charCode == 32)
    return true;
  else 
    return false;
}




	
</script>

<title>Documentation</title>
</head>
<body>
<body style="background-color:white;">

   <?php 
        include ('header.php');
   ?> 

<br><br>
	
<div class="container">
  <div class="row">

      <?php 
          include('project_taskbar.php')
      ?>

  </div>  

<div class="row">

  <form role="form" method="post" id="theForm" action="#"> 
	 <div class="form-group">
			   

			
<div class="col-md-12" style="border:1px solid black;background-color:white;">
	<label>
		<h2>Add Project Documentation</h2>
	</label><br/>

	<label>Date</label>
<div class="row">
 	 <div class="col-md-4">
   		 <input type="date" class="form-control" class="datepicker" required="required" name="date" id="date"> <span id="nameError" class="green"></span>
   </div> 	
</div>

<br/>

  <label>Project Information</label>
    	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Project Name</label>
   		 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_name" id="name"> <span id="nameError" class="green"></span>
   </div>
   <div class="col-md-4">   

  		<label>Project ID</label>
   		 <input type="text" class="form-control" name="project_id">
   </div>
  	
	</div>
                   
	 
<br>
	
	<div class="row">
 	 <div class="col-md-6">
 	 	<label>SPMP Link</label>
   		 <input type="text" class="form-control" name="spmp_link" id="name"> <span id="nameError" class="green"></span>
   </div>

   <div class="col-md-6">
 	 	<label>SPMP Status</label>
   		 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="spmp_status" id="name"> <span id="nameError" class="green"></span>
   </div>

  </div>

<br>

  <div class="row">
   <div class="col-md-6">
    <label>SRS Link</label>
       <input type="text" class="form-control" name="srs_link" id="name"> <span id="nameError" class="green"></span>
   </div>

  <div class="col-md-6">
    <label>SRS Status</label>
       <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="srs_status" id="name"> <span id="nameError" class="green"></span>
    </div>

  </div>

<br>

  <div class="row">
   <div class="col-md-6">
    <label>SDD Link</label>
       <input type="text" class="form-control" name="sdd_link" id="name"> <span id="nameError" class="green"></span>
    </div>

    <div class="col-md-6">
    <label>SDD Status</label>
       <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="sdd_status" id="name"> <span id="nameError" class="green"></span>
    </div>

  </div>
	
<br>

  <div class="row">
   <div class="col-md-6">
    <label>STD Link</label>
       <input type="text" class="form-control" name="std_status" id="name"> <span id="nameError" class="green"></span>
   </div>

   <div class="col-md-6">
    <label>STD Status</label>
       <input type="text" class="form-control" required="required"  onkeypress="return onlyChars(event)" name="std_link" id="name"> <span id="nameError" class="green"></span>
   </div>

  </div>
  

 <br><br>

	</div>

	<input class="btn btn-success" type="submit" name="submit" value="Submit" id="submit">
	<input class="btn btn-danger" type="reset" value="Reset">
	
	</form>
		
<br>
		

</div>
				
		
</div>


<?php


include ('../database_connect.php');


if(isset($_POST['submit']))
{ 
  
  $date=$_POST['date'];
  $project_name=$_POST['project_name'];
  $project_id=$_POST['project_id'];
  $spmp_link=$_POST['spmp_link'];
  $spmp_status=$_POST['spmp_status'];
  $srs_link=$_POST['srs_link'];
  $srs_status=$_POST['srs_status'];
  $sdd_link=$_POST['sdd_link'];
  $sdd_status=$_POST['sdd_status'];
  $std_link=$_POST['std_link'];
  $std_status=$_POST['std_status'];
  
  


 $sql="INSERT INTO `dc_database`.`documentation` (`date_of_documentation`, `project_name`, `project_id`, 
  `spmp_link`, `spmp_status`, `srs_link`, `srs_status`, `sdd_link`, `sdd_status`, `std_link`, `std_status`)
   VALUES ('$date', '$project_name', '$project_id', '$spmp_link', '$spmp_status', 
  '$srs_link', '$srs_status', '$sdd_link', '$sdd_status', '$std_link', '$std_status')";
  

  $insertQuery = mysqli_query($dbconnect,$sql) or die(mysqli_error($dbconnect));
  if($insertQuery){
    echo "<script>alert('Record Submitted')</script>";
    header('location:add_documentation.php');
  }
  else
  {  echo "<script>alert('Record not Submitted, Please Provide unique Project ID')</script>";
    header('location:add_documentation.php');
  }

  //mysqli_query($dbconnect,$sql);
} 


?>

<br><br>

<?php
//$sql='SELECT * FROM documentation';
 
$result = mysqli_query($dbconnect,"SELECT * FROM documentation ");

//echo "<div class='table-responsive'>"
echo "<table class='table table-hover'>";

  echo "<td>". 'PROJECT NAME' . "<td>". 'SPMP LINK'."<td>". 'SPMP STATUS'."<td>". 'SRS LINK'."<td>". 'SRS STATUS'."<td>". 'SDD LINK'."<td>". 'SDD STATUS'."<td>". 'STD LINK'."<td>". 'STD STATUS';
 

while($row = mysqli_fetch_array($result))
  {
    
  echo "<tr>";
  echo "<td>". $row['project_name'] . "<td><a href=".$row['spmp_link'].">" .$row['spmp_link']."</a><td>". $row['spmp_status']."<td><a href=".$row['srs_link'].">" .$row['srs_link']."</a><td>". $row['srs_status']."<td><a href=".$row['sdd_link'].">" .$row['sdd_link']."</a><td>". $row['sdd_status']."<td><a href=".$row['std_link'].">" .$row['std_link']."</a><td>". $row['std_status'];
  echo "</tr>";
 
  }
   echo "</table>";
   //echo "</div>";

mysqli_close($dbconnect);
?>

</div>

<?php 
    include('footer.php');
?>
</body>
</html>

