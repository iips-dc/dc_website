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

<body style="background-color:grey;">

	<?php 
        include ('header.php');
   ?> <br><br>
	<div class="container">
    <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Hosting Domain
                    
                </h1>
                 <ol class="breadcrumb">
                    <li><a href="hosting.php">Home</a>
                    </li>
                    <li><a href="add_domain.php">Add new Hosting Domain</a>
                    </li>
                     
                </ol>
            </div>

        </div>
		<div class="row">

	<form role="form" method="post" id="theForm" action="#"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:grey;">
	<label>
		<h2>Add Details of new Hosting Domain</h2>

	</label><br/>


	 <div class="row">
 	 <div class="col-md-4">
      <label>Date of e....</label>
   		 <input type="date" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="YYMMDD" name="doe" id="date"> <span id="nameError" class="green"></span>
      </div>

    <div class="col-md-4">  
      <label>Date of Registration</label>
       <input type="date" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="YYMMDD" name="dor" id="date"> <span id="nameError" class="green"></span>
  	</div>
  	
	</div>

<br/>
    
    	
	<div class="row">
 	 <div class="col-md-12">
 	 	<label>Hosting</label>
   		 <input type="text" class="form-control" name="hosting" id=""> <span id="nameError" class="green"></span>
  	</div>
  	
  	
	</div>
                   
	 
	<br>

  <div class="row">
   <div class="col-md-12">
    <label>Domain</label>
       <input type="text" class="form-control" name="domain" id="name"> <span id="nameError" class="green"></span>
    </div>
    
    
  </div>
                   
   
  <br>

  <div class="row">
   <div class="col-md-12">
    <label>URL</label>
       <input type="text" class="form-control" name="url" id="name"> <span id="nameError" class="green"></span>
    </div>
      
  </div>
                   
   
  <br>
	
	

    
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
  
  
  $doe=$_POST['doe'];
  $dor=$_POST['dor'];
  $hosting=$_POST['hosting'];
  $domain=$_POST['domain'];
  $url=$_POST['url'];
  
  
  


 $sql="INSERT INTO hosting_domain VALUES('','$hosting','$domain', '$url', '$doe', '$dor') ";
  
  mysqli_query($con,$sql);
  


?>
<?php 
    include('footer.php');
?>
</body>
</html>

