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
//   var data=document.getElementById('date').value;
//   if(data.Length!=6)
//        {
//        alert("Please enter valid date in format YYMMDD ");
//        return false;
//        }
//     else
//       return true;   
// }

	
</script>

<title>Documentation</title>
</head>
<body>
<body style="background-color:white;">

	<?php 
        include ('header.php');
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
   		 <input type="date" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="YYMMDD" maxlength="6" name="dod" id="date"> <span id="nameError" class="green"></span>
  	</div>
    
  	
	</div>

<br/>
    <label>Project Information</label>
    	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Project Name</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="projectname" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Project ID</label>
   		 <input type="text" class="form-control" name="projectid">
  	</div>
  	
	</div>
                   
	 
	<br>
	
	<div class="row">
 	 <div class="col-md-6">
 	 	<label>SPMP Link</label>
   		 <input type="text" class="form-control" name="spmplink" id="name"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-6">
 	 	<label>SPMP Status</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="spmpstatus" id="name"> <span id="nameError" class="green"></span>
  	</div>

  </div>

  <br>

  <div class="row">
   <div class="col-md-6">
    <label>SRS Link</label>
       <input type="text" class="form-control" name="srslink" id="name"> <span id="nameError" class="green"></span>
    </div>

    <div class="col-md-6">
    <label>SRS Status</label>
       <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="srsstatus" id="name"> <span id="nameError" class="green"></span>
    </div>

  </div>

  <br>

  <div class="row">
   <div class="col-md-6">
    <label>SDD Link</label>
       <input type="text" class="form-control" name="sddlink" id="name"> <span id="nameError" class="green"></span>
    </div>

    <div class="col-md-6">
    <label>SDD Status</label>
       <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="sddstatus" id="name"> <span id="nameError" class="green"></span>
    </div>

  </div>
	
    <br>

    <div class="row">
   <div class="col-md-6">
    <label>STD Link</label>
       <input type="text" class="form-control" name="stdstatus" id="name"> <span id="nameError" class="green"></span>
    </div>

    <div class="col-md-6">
    <label>STD Status</label>
       <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="stdlink" id="name"> <span id="nameError" class="green"></span>
    </div>

  </div>
  

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


$server = "localhost";
$username = "root";
$password="root";
$database="dc_database";

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
 else
 {
	echo "successfully submitted";
}
  
  
  $dod=$_POST['dod'];
  $projectname=$_POST['projectname'];
  $projectid=$_POST['projectid'];
  $spmplink=$_POST['spmplink'];
  $spmpstatus=$_POST['spmpstatus'];
  $srslink=$_POST['srslink'];
  $srsstatus=$_POST['srsstatus'];
  $sddlink=$_POST['sddlink'];
  $sddstatus=$_POST['sddstatus'];
  $stdlink=$_POST['stdlink'];
  $stdstatus=$_POST['stdstatus'];
  
  


 $sql="INSERT INTO documentation VALUES('$dod','$projectname','$projectid', '$spmplink', '$spmpstatus', '$srslink', '$srsstatus', '$sddlink', '$sddstatus',  '$stdlink','$stdstatus') ";
  
  mysqli_query($con,$sql);
  


?>
<?php 
    include('footer.php');
?>
</body>
</html>

