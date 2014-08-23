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

// function digitsonly(event)
// {
// 	var data=document.getElementById('date').value;
// 	if(data.Length!=6)
//        {
//        alert("Please enter valid date in format YYMMDD ");
//        return false;
//        }
//     else
//     	return true;   
// }


	
</script>
</head>
<body>
<body style="background-color:white;">

	<?php 
        include ('header.php');
        include ('date_picker.php')
   ?> <br><br>
	<div class="container">
		<div class="row">
      <div class="col-lg-12">
                <h1 class="page-header">Projects
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="project_mgm.php">Home</a>
                    </li>
                    <li><a href="current_projects.php">Current Projects</a>
                    </li>
                    <li><a href="past_projects.php">Past Projects</a>
                    </li>
                    <li><a href="review.php">Project Reviews</a>
                    </li>
                    <li><a href="documentation.php">Documentation</a>
                    </li>
                    <li><a href="add_project.php">Add Project</a>
                    </li>
                    
                    
                    
                </ol>
            </div>


	<form role="form" method="post" id="theForm" action="#"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:white;">
	<label>
		<h2>Add Project</h2>
	</label><br/>
	<label>Date of Starting</label>
		

	 <div class="row">
 	 <div class="col-md-4">
   		 <input type="date" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="YYMMDD" maxlength="6" name="date_of_registration" id="datepicker"> <span id="nameError" class="green"></span>
  	</div>
  	
	</div>

<br/>
    <label>Project Information</label>
    	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Project Name</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="project_name" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Project ID</label>
   		 <input type="text" class="form-control" name="project_id">
  	</div>
  	<div class="col-md-4">
  		<label>Project Type</label>
    		<input type="text" class="form-control" onkeypress="return onlyChars(event)" name="project_type" id="lname"> <span id="lnameError" class="red"></span>
		
	  </div>
	</div>
                   
	 
	<br>
	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Team Leader</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="team_leader" id="name"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>Team ID</label>
   		 <input type="text" class="form-control" name="team_id" id="name"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>Project Status</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="project_status" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
  	</div>
	
    <br>
    <label>Team Members</label>
   	<input type="text" class="form-control"  placeholder="jeff , jenny, jack" id="inputEmail3" name="members"> 

   	<br>

   	<label>Github Link</label>
   	<input type="text" class="form-control"  id="inputEmail3" name="github_link"> 

   	<br>

   	<label>Project link on web(if available)</label>
   	<input type="text" class="form-control"  id="inputEmail3" name="link"> 

   	<br>
   	<label>Project Description</label>
   	<textarea class="form-control" rows="3" id="add" name="project_description" ></textarea>

   	<br><br>

    </div>

  	<input class="btn btn-success"type="submit" value="Submit" id="submit">
  	<input class="btn btn-danger" type="reset" value="Reset">
	
	</form>
		
		<br>
		

		</div>
				
		</div>
	</div>


<?php


include ('database_connect.php');
  
  $date_of_registration=$_POST['date_of_registration'];
  $project_name=$_POST['project_name'];
  $project_id=$_POST['project_id'];
  $project_type=$_POST['project_type'];
  $team_leader=$_POST['team_leader'];
  $team_id=$_POST['team_id'];
  $project_status=$_POST['project_status'];
  $members=$_POST['members'];
  $github_link=$_POST['github_link'];
  $link=$_POST['link'];
  $project_description=$_POST['project_description'];
  
  


 $sql="INSERT INTO projects VALUES('$project_id', '$project_name', '$project_type','$project_description', '$project_leader', '$team_id', '$project_status', '$dc_page_link', '$github_link') ";
  
  mysqli_query($dbconnect,$sql);
  


?>
<?php 
    include('footer.php');
?>
</body>
</html>

