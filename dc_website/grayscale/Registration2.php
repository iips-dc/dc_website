<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<!--<script type="text/javascript" src="MyFormValidation.js" ></script>-->
<script>

function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}

</script>

</head>
<body>
<body style="background-color:grey;">
	<div class="container">
		<div class="row"><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<!--<script type="text/javascript" src="MyFormValidation.js" ></script>-->
<script>

function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}

</script>
</head>
<body>
<body style="background-color:grey;">
	<div class="container">
		<div class="row">

	<form role="form" method="post" id="theForm" action="r2.php"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:grey;">
	<label>
		<h2>DC member Entry</h2>
	</label><br/>
	

<br/>

	<label>Member ID</label>
	<div class="row">
	<div class="col-md-4">
	<input type="text" class="form-control"  name="id" id="id">
	</div>
	</div>
<br>

    <label>Personal Information</label>
    	
	<div class="row">
 	 <div class="col-md-6">
 	 	<label>First Name</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="firstname" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
  	<div class="col-md-6">
  		<label>Last Name</label>
    		<input type="text" class="form-control" onkeypress="return onlyChars(event)" name="lastname" id="lname"> <span id="lnameError" class="red"></span>
		
	  </div>
	</div>
                   
	 
	
	<label>BirthDay</label>
	<div class="row">
 	 <div class="col-md-4">
   		 <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="birthday" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
	</div>
	

	<label>Gender</label>
	<div class="row">
	<div class="col-md-4">
	<select class="form-control" name="gender">
  	<option>Male</option>
  	<option>Female</option>
	</select>
  	</div>
	</div>	

	<label>Blood Group</label>
	<div class="row">
	<div class="col-md-4">
	<input type="text" class="form-control"  name="bloodgroup" id="number">
	</div>
	</div>

	<div class="row">
	<div class="col-md-4">
	<label>Course</label>
	<select class="form-control" name="Course">
  	<option>M.tech</option>
  	<option>MCA</option>
  	<option>MBA</option>
	</select>
	</div>

	<div class="col-md-4">
		<label>semester of joining</label>
	<input type="text" class="form-control" name="semester">
	</div>

	</div>

	<br>

	<label>Github ID/user name</label>
 	<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="github"> 

 	<br>

 	<label>Linkedin ID</label>
 	<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="linkedin"> 

 	<br/>

 	<label>Current Address</label>
 	<textarea class="form-control" rows="3" id="add" name="currentaddress" ></textarea>

 	<br>
 	<label>
 	<input type="checkbox" value="" class="checkme" >
 	Copy to Permanent Address
 	</label>
 	<br>

	<label>Permanent Address</label>
 	<textarea class="form-control" rows="3" name="permanentaddress" ></textarea>
 	<br/>
	

 	

 	<label>Parental/Guardian Information</label>
	<div class="row">
	<div class="col-md-6">
		<label>Father name</label>
	<input type="text" class="form-control" name="fathername">
	</div>
	
	
 
	<div class="col-md-6">
		<label>Guardian Name</label>
	<input type="text" class="form-control"  name="guardianname">
	</div>
	
    </div>
	<br/>

	<div class="row">
	<div class="col-md-6">
		<label>Mother name</label>
	<input type="text" class="form-control" name="mothername">
	</div>
	</div>	


	


 	

	<br><br>
	

	<input class="btn btn-success"type="submit" value="Submit" id="submit">
	<input class="btn btn-danger" type="reset" value="Reset">
		
		<br>
		<button class="btn-warning" onclick="window.print()">Print This Page</button>

		</form>
	</div>
	</div>
		</div>
		</div>
	
</body>
</html>

