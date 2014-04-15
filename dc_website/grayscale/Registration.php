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

	<form role="form" method="post" id="theForm" action="r.php"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:grey;">
	<label>
		<h2>Student Entrance</h2>
	</label><br/>
	<label>Date of joining</label>
		

	 <div class="row">
 	 <div class="col-md-4">
   		 <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="doj" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
	</div>

<br/>
    <label>Personal Information</label>
    	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>First Name</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="firstname" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Middle Name</label>
   		 <input type="text" class="form-control" onkeypress="return onlyChars(event)" name="midname">
  	</div>
  	<div class="col-md-4">
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

	<br/>
	<label>Area of Intrest</label>
 	<textarea class="form-control" rows="3" id="add" name="interest" ></textarea>

 	<br/>
 	<label>Basic Skills</label>
 	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> HTML
	</label>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> CSS
	</label>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> ANSI C
	</label>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> C++
	</label>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> Javascript
	</label>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> Python
	</label>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> SQl
	</label>

 	<textarea class="form-control" rows="3" id="add" placeholder="MENTION OTHER HERE" name="skills"></textarea>

 	<br/>
 	<label>Current Address</label>
 	<textarea class="form-control" rows="3" id="add" name="currentaddress" ></textarea>

 	<label>
 	<input type="checkbox" value="" class="checkme" >
 	Copy to Permanent Address
 	</label>
 	<br>

	<label>Permanent Address</label>
 	<textarea class="form-control" rows="3" name="permanentaddress" ></textarea>
 	<br/>

	<label>Contact Information and Email ID detail</label>
	
	<div class="row">
	<div class="col-md-4">
		<label>Country Code</label>
	<input type="text" class="form-control" placeholder="Country Code" name="countrycode">
	</div>
	<div class="col-md-4">
		<label>STD Code</label>
	<input type="text" class="form-control" placeholder="STD Code" name="stdcode">
	</div>
	<div class="col-md-4">
		<label>Mobile number</label>
	<input type="text" class="form-control" placeholder="Mobile number" name="studmobile">
	</div>
	</div>

	<label>Email</label>
 	<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="studemail"> 	

 	<label>Github ID/user name</label>
 	<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="github"> 

 	<br/>

 	<label>Parental/Guardian Information</label>
	<div class="row">
	<div class="col-md-6">
		<label>Father's name</label>
	<input type="text" class="form-control" name="fathername">
	</div>
	<div class="col-md-6">
		<label>Contact no</label>
	<input type="text" class="form-control" name="fathermobile">
	</div>
	
	</div>
	<label>Father's Email ID</label>
 	<input type="email" class="form-control" id="inputEmail3" name="fatheremail"> 	
	
 	<div class="row">
	<div class="col-md-6">
		<label>Guardian's Name</label>
	<input type="text" class="form-control"  name="guardianname">
	</div>
	<div class="col-md-6">
		<label>Contact no</label>
	<input type="text" class="form-control" name="guardianmobile">
	</div>
	</div>

	<br/>
	<label>Academic Information</label>
	<br/>
	<label>School Name</label>
 	<input type="text" class="form-control" id="inputEmail3" name="schoolname"> 
	<div class="row">
	<div class="col-md-6">
		<label>Percentage</label>
		<label>10th</label>
	<input type="text" class="form-control" name="tenthper">
	</div>
	<div class="col-md-6">
		<label>12th</label>
	<input type="text" class="form-control" name="twealthper">
	</div>

	<div class="col-md-4">
		<label>Course</label>
	<input type="text" class="form-control" placeholder="M.tech/MCA/MBA" name="course">
	</div>
	<div class="col-md-4">
		<label>semester</label>
	<input type="text" class="form-control" name="semester">
	</div>
	<div class="col-md-4">
		<label>CGPA</label>
	<input type="text" class="form-control" name="cgpa">
	</div>
	</div>

	<br/>
	<label>Online Courses</label>
 	<textarea class="form-control" rows="3" id="add" name="onlinecourses" ></textarea>

 	<br/>

 	<label>Project Details</label>
	<div class="row">
	<div class="col-md-4">
		<label>Project Name</label>
	<input type="text" class="form-control" name="projectname">
	</div>
	<div class="col-md-4">
		<label>Project Type</label>
	<input type="text" class="form-control" name="projecttype">
	</div>
	<div class="col-md-4">
		<label>Duration</label>
	<input type="text" class="form-control" name="projectduration">
	</div>
	</div>

	<br/>

	<label>Short Description</label>
 	<textarea class="form-control" rows="3" id="add" name="projectdescr" ></textarea>
 	</div>

 	<br/>
 	<label>How you came to know about DC</label><br/>
	<div class="row">
	<div class="col-md-4">
	<select class="form-control" name="knowdc">
  	<option>Friend</option>
  	<option>Senior</option>
  	<option>Faculty</option>
  	<option>Alumni</option>
  	<option>Classmate</option>
	<option>Social-media</option>
  	<option>Others</option>
  	
	</select>
	</div>
	</div>
	

	<br/>
	Specify the name of that person/source
 	<input type="text" class="form-control" id="inputEmail3" name="referencename"> 
	

 	<br/>
 	<label>Why Should we choose you</label>(in lase than 30 words)
 	<textarea class="form-control" rows="3" id="add" name="whychoose" ></textarea>

 	<br/>
	<label>Declaration By Student</label><br/>
	I have inclosed all the documents as proof of the prerequisites to be completed. i here by declare that all the above information stated is true to best of my knowledge. I also accept the rules and policies of development center(refer to Annexure II)<br/>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> I Agree
	</label>
	
	<br/><br/>
	<label>Declaration By Parent/Guardian</label><br/>
	I have declare that the above information is true to the best of my knowledge. I dont have any problem if my son/daughter works in DC for whole day/ holidays/ for a longer duration. I will encourage and support him/her for his/her work. <br/><br/>
	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1"> I Agree
	</label>
	<br/>
	NOTE : The timimg for girls is strictly till 6.00 PM only.
	

	<br/><br/>
	

	<input class="btn btn-success"type="submit" value="Submit" id="submit">
	<input class="btn btn-danger" type="reset" value="Reset">
	
		</form>
		
		<br>
		<button class="btn-warning" onclick="window.print()">Print This Page</button>

		</div>
				
		</div>
	</div>

</body>
</html>

