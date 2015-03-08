<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">

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



<title>Projects</title>

</head>
<body style="background-color:white;">

	<?php 
        include ('header.php');
        include ('date_picker.php')
   ?> 

  <br><br>

<div class="container">
	<div class="row">
    <?php 
        include('project_taskbar.php')
    ?>


<form role="form" method="POST" id="theForm" action="#"> 
<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:white;">
<label>
		<h2>Add Project</h2>
</label><br/>

 <label>Date of Starting</label>
	 <div class="row">
 	  <div class="col-md-4">
   		 <input type="date" class="form-control" required="required" name="date_of_registration" class="datepicker"> 
       
  	</div>
  	
	 </div>

<br/>

  <label>Project Information</label> 	
	<div class="row">
 	 <div class="col-md-4">

 	 	<label>Project Name</label>
   		 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_name" id="project_name"> <span id="nameError" class="green"></span>
   </div>
   <div class="col-md-4">
  		<label>Project ID</label>
   		 <input type="text" class="form-control" name="project_id" id="project_id">
   </div>
   <div class="col-md-4">
  		<label>Project Type</label>
    		<input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_type" id="lname"> <span id="lnameError" class="red"></span>
		
	 </div>
	</div>
                   
	 
<br>
	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Team Leader</label>
   		 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="team_leader" id="name"> <span id="nameError" class="green"></span>
   </div>

  	<div class="col-md-4">
 	 	<label>Team ID</label>
   		 <input type="text" class="form-control" name="team_id" id="name"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>Project Status</label>
   		 <input type="text" class="form-control" required="required" onkeypress="return onlyChars(event)" name="project_status" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
  </div>
	
<br>

  <label>Deployed at</label>
  <div class="row">
    <div class="col-md-4">

    <select class="form-control" name="deployed">
      <option>IIPS improvement</option>
      <option>University improvement</option>
      <option>Other</option>
    
    </select>
    </div>
  </div>

<br>

    <label>Team Members</label>
 	  <input type="text" class="form-control"  required="required" placeholder="jeff , jenny, jack" id="inputEmail3" name="members"> 

 <br>

   	<label>Github Link</label>
   	<input type="text" class="form-control"  required="required" id="inputEmail3" name="github_link"> 

 	<br>

   	<label>DC page link on web</label>
   	<input type="text" class="form-control"  id="inputEmail3" name="link"> 

 	<br>
   	<label>Project Description</label>
   	<textarea class="form-control" rows="3" required="required" id="add" name="project_description" ></textarea>

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

//TO insert data into database

if ( isset( $_POST['submit'] ) ) 
   
  {  
    $date_of_registration=$_POST['date_of_registration'];
    $project_name=$_POST['project_name'];
    $project_id=$_POST['project_id'];
    $project_type=$_POST['project_type'];
    $team_leader=$_POST['team_leader'];
    $team_id=$_POST['team_id'];
    $project_status=$_POST['project_status'];
    $members=$_POST['members'];
    $deployed = $_POST['deployed'];
    $github_link=$_POST['github_link'];
    $link=$_POST['link'];
    $project_description=$_POST['project_description'];
    
    
   

   $sql="INSERT INTO  `dc_database`.`projects` (
    `date_of_start` ,
    `project_id` ,
    `project_name` ,
    `project_type` ,
    `project_leader` ,
    `team_members` ,
    `project_status` ,
    `team_id` ,
    `deployment` ,
    `dc_page_link` ,
    `github_page_link` ,
    `project_desc`
    )
    VALUES (
    '$date_of_registration',  '$project_id',  '$project_name',  '$project_type',  '$team_leader',  '$members',  '$project_status',  '$team_id',  '$deployed',  '$link',  '$github_link',  '$project_description'
    )";

    
    $insertQuery = mysqli_query($dbconnect,$sql) or die(mysqli_error($dbconnect));
    if($insertQuery){
      echo "<script>alert('Record Submitted')</script>";
      header('location:add_project.php');
    }
    else
    {  echo "<script>alert('Record not Submitted, Please Provide unique Project ID')</script>";
      header('location:add_project.php');
    }
    
   // mysqli_query($dbconnect,$sql);
  
}
?>

<br><br>

<?php

// To print out the project details according to Deployment
 
//for IIPS Projects
echo "IIPS Improvement Projects"; 
 
$result = mysqli_query($dbconnect,"SELECT * FROM projects where deployment='IIPS improvement'");

  echo "<table class='table table-hover'>";

  echo "<td>". 'PROJECT NAME' . "<td>". 'PROJECT LEADER'."<td>". 'PROJECT STATUS'."<td>". 'DC PAGE LINK'."<td>". 'DESCRIPTION';
   

  while($row = mysqli_fetch_array($result))
    {
      
    echo "<tr>";
    echo "<td>". $row['project_name'] . "<td>". $row['project_leader']. "<td>" . $row['project_status']. "<td> <a href=".$row['dc_page_link'].">". $row['dc_page_link']. "</a> ". "<td>". $row['project_desc'];
    echo "</tr>";
   
    }
     echo "</table>";
                                                                                                                        
  //mysqli_close($dbconnect);

//for DAVV Projects
echo "University Improvement Projects"; 
 
$result = mysqli_query($dbconnect,"SELECT * FROM projects where deployment='University improvement'");

  echo "<table class='table table-hover'>";

  echo "<td>". 'PROJECT NAME' . "<td>". 'PROJECT LEADER'."<td>". 'PROJECT STATUS'."<td>". 'DC PAGE LINK'."<td>". 'DESCRIPTION';
   

  while($row = mysqli_fetch_array($result))
    {
      
    echo "<tr>";
    echo "<td>". $row['project_name'] . "<td>". $row['project_leader']. "<td>" . $row['project_status']. "<td> <a href=".$row['dc_page_link'].">". $row['dc_page_link']. "</a> ". "<td>". $row['project_desc'];
    echo "</tr>";
   
    }
     echo "</table>";
                                                                                                                        
 // mysqli_close($dbconnect);

//For other Projects
echo "Other Projects"; 
 
$result = mysqli_query($dbconnect,"SELECT * FROM projects where deployment='Other'");

  echo "<table class='table table-hover'>";

  echo "<td>". 'PROJECT NAME' . "<td>". 'PROJECT LEADER'."<td>". 'PROJECT STATUS'."<td>". 'DC PAGE LINK'."<td>". 'DESCRIPTION';
   

  while($row = mysqli_fetch_array($result))
    {
      
    echo "<tr>";
    echo "<td>". $row['project_name'] . "<td>". $row['project_leader']. "<td>" . $row['project_status']. "<td> <a href=".$row['dc_page_link'].">". $row['dc_page_link']. "</a> ". "<td>". $row['project_desc'];
    echo "</tr>";
   
    }
     echo "</table>";
                                                                                                                        
  mysqli_close($dbconnect);


?>
</div>

<?php 
    include('footer.php');
?>
</body>
</html>

