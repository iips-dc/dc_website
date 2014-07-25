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
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}

function digitsonly(event)
{
	var data=document.getElementById('date').value;
	if(data.Length!=6)
       {
       alert("Please enter valid date in format YYMMDD ");
       return false;
       }
    else
    	return true;   
}


	
</script>
</head>
<body>
<body style="background-color:grey;">

	<?php 
        include ('header.php');
   ?> <br><br>
	<div class="container">
		<div class="row">
      <div class="col-lg-12">
                <h1 class="page-header">Projects
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="system.php">Home</a>
                    </li>
                    <li><a href="add_system.php">Add</a>
                    </li>
                     
                </ol>
            </div>


	<form role="form" method="post" id="theForm" action="#"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:grey;">
	<label>
		<h2>Add System Information</h2>
	</label><br/>

	<label>System Name</label>
		

	 <div class="row">
 	 <div class="col-md-6">
   		 <input type="text" class="form-control" name="name" > <span id="nameError" class="green"></span>
  	</div>
  	
	</div>

<br/>
    
    	
	<div class="row">
 	 <div class="col-md-6">
 	 	<label>RAM</label>
   		 <input type="text" class="form-control"  name="ram" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-6">
  		<label>RAM Type</label>
   		 <input type="text" class="form-control" name="ram_type">
  	</div>
  	
	</div>
                   
	 
	<br>
	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>HDD Capacity</label>
   		 <input type="text" class="form-control"  name="hdd" > <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>Monitot Type</label>
   		 <input type="text" class="form-control" name="monitor_type"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>LAN</label>
   		 <input type="text" class="form-control"  name="lan"> <span id="nameError" class="green"></span>
  	</div>
  	
  	</div>
	
    <br>

    <div class="row">
   <div class="col-md-6">
    <label>Access</label>
       <input type="text" class="form-control"  name="access"> <span id="nameError" class="green"></span>
    </div>

    <div class="col-md-6">
    <label>OS Installed</label>
       <input type="text" class="form-control" name="os"> <span id="nameError" class="green"></span>
    </div>

  
    </div>



 	<br>
 	<label>Software Details</label>
 	<textarea class="form-control" rows="3" id="add" name="sw_details" ></textarea>

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
  
  
  $name=$_POST['name'];
  $ram=$_POST['ram'];
  $ram_type=$_POST['ram_type'];
  $hdd=$_POST['hdd'];
  $monitor_type=$_POST['monitor_type'];
  $lan=$_POST['lan'];
  $access=$_POST['access'];
  $os=$_POST['os'];
  $sw_details=$_POST['sw_details'];
 
  


 $sql="INSERT INTO system_information VALUES('','$name', '$ram', '$ram_type', '$hdd', '$monitor_type', '$lan', '$access', '$os', '$sw_details') ";
  
  mysqli_query($con,$sql);
  


?>
<?php 
    include('footer.php');
?>
</body>
</html>

