<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
  <link href="css/modern-business.css" rel="stylesheet">
<script type="text/javascript" src="MyFormValidation.js" ></script>
<script src="js/gototop.js"></script>

<title>Entrance</title>
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

function onlyPointers(event)				
{
    	var e =event; 
   	var charCode = e.which || e.keyCode;

    		if ((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 37 || charCode == 39 || charCode == 9 || charCode == 46) 
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
/*Function used to copy the current address to permanent address*/
function Copy(add)
{
	if(add.checkme.checked==true)
	{
		add.permanentaddress.value=add.currentaddress.value;
	}
}

	
</script>
</head>
<body>
<body style="background-color:white;">

	<a class="go-top" href="#" style="display: inline;">

    <img height="40px" src="images/gototop.png" alt="Go to Top"></img>

</a>

	<?php 
        include ('header.php');
   ?> <br><br><br><br>
	<div class="container">
		<div class="row">

	<form role="form" method="post" id="theForm" action="#"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:white;">
	<label>
		<h2>Student Entrance</h2>
	</label><br/>
	
		

	 <div class="row">
 	 <div class="col-md-4">
 	 	<label>Date of joining</label>
   		 <input type="date" class="form-control" placeholder="YYMMDD" name="doj" id="name" onkeypress="return onlyNumbers(event)" maxlength="6"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Roll No</label>
   		 <input type="date" class="form-control" placeholder="IT-2K11-21" name="roll_no" maxlength="10"> <span id="nameError" class="green"></span>
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
   		 <input type="date" class="form-control" placeholder="YYMMDD" name="birthday" onkeypress="return onlyNumbers(event)" maxlength="6"> <span id="nameError" class="green"></span>
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
	<label>Area of Interest</label>
 	<textarea class="form-control" rows="3" id="add" name="interest" ></textarea>

 	<br/>
 	<label>Basic Skills</label>
 	

 	<textarea class="form-control" rows="3" id="add" placeholder="HTML, CSS, Python, C, C++, Javascript , SQL etc etc" name="skills"></textarea>

 	<br/>
 	<label>Current Address</label>
 	<textarea class="form-control" rows="3" id="add" name="currentaddress" ></textarea>

 	
 	<label>
 	<input type="checkbox" style="display:inline;" name="checkme" onclick="Copy(this.form)">
 	<span style="display:inline;">Copy to Permanent Address</span>
 	</label>
 	<br>

	<label>Permanent Address</label>
 	<textarea class="form-control" rows="3" name="permanentaddress" ></textarea>
 	<br/>

	<label>Contact Information and Email ID detail</label>
	
	<div class="row">
	<div class="col-md-4">
		<label>Country Code</label>
	<input type="text" class="form-control" placeholder="Country Code" name="countrycode" onkeypress="return onlyNumbers(event)">
	</div>
	<div class="col-md-4">
		<label>STD Code</label>
	<input type="text" class="form-control" placeholder="STD Code" name="stdcode" onkeypress="return onlyNumbers(event)">
	</div>
	<div class="col-md-4">
		<label>Mobile number</label>
	<input type="text" class="form-control" placeholder="Mobile number" onkeypress="return onlyNumbers(event)" name="studmobile" id="cnumber" maxlength="10">
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
	<input type="text" class="form-control" onkeypress="return onlyChars(event)" name="fathername">
	</div>
	<div class="col-md-6">
		<label>Contact no</label>
	<input type="text" class="form-control" name="fathermobile" onkeypress="return onlyNumbers(event)" maxlength="10">
	</div>
	
	</div>
	<label>Father's Email ID</label>
 	<input type="email" class="form-control" id="inputEmail3" name="fatheremail"> 	
	
 	<div class="row">
	<div class="col-md-6">
		<label>Guardian's Name</label>
	<input type="text" class="form-control"  onkeypress="return onlyChars(event)" name="guardianname">
	</div>
	<div class="col-md-6">
		<label>Contact no</label>
	<input type="text" class="form-control" name="guardianmobile" onkeypress="return onlyNumbers(event)" maxlength="10">
	</div>
	</div>

	<br/>
	<label>Academic Information</label>
	<br/>
	<label>School Name</label>
 	<input type="text" class="form-control" onkeypress="return onlyChars(event)" id="inputEmail3" name="schoolname"> 
	<div class="row">
	<div class="col-md-6">
		<label>Percentage</label>
		<label>10th</label>
	<input type="text" class="form-control" placeholder="88.70" name="tenthper" onkeypress="return onlyPointers(event)" maxlength="5">
	</div>
	<div class="col-md-6">
		<label>12th</label>
	<input type="text" class="form-control" placeholder="88.70" name="twealthper" onkeypress="return onlyPointers(event)" maxlength="5">
	</div>

	<div class="col-md-4">
		<label>Course</label>
	<select class="form-control" name="course">
  	<option>M.tech</option>
  	<option>MCA</option>
  	<option>MBA</option>
  
	</select>
	</div>
	<div class="col-md-4">
		<label>semester</label>
	<select class="form-control" name="semester">
  	<option>1</option>
  	<option>2</option>
  	<option>3</option>
  	<option>4</option>
  	<option>5</option>
	<option>6</option>
  	<option>7</option>
  	<option>8</option>
  	<option>9</option>
  	<option>10</option>
  	<option>11</option>
  	<option>12</option>
  	
	</select>
	</div>
	<div class="col-md-4">
		<label>CGPA</label>
	<input type="text" class="form-control" placeholder="08.72" name="cgpa" onkeypress="return onlyPointers(event)" maxlength="5">
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
	<input type="text" class="form-control" onkeypress="return onlyChars(event)" name="projectname">
	</div>
	<div class="col-md-4">
		<label>Project Type</label>
	<input type="text" class="form-control" onkeypress="return onlyChars(event)" name="projecttype">
	</div>
	<div class="col-md-4">
		<label>Duration</label>
	<input type="text" class="form-control" name="projectduration">
	</div>
	</div>

	<br/>

	<label>Short Description</label>
 	<textarea class="form-control" rows="3" id="add" name="projectdescr" ></textarea>
 	

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
 	<input type="text" class="form-control" id="inputEmail3" onkeypress="return onlyChars(event)" name="referencename"> 
	

 	<br/>
 	<label>Why Should we choose you</label>(in lase than 30 words)
 	<textarea class="form-control" rows="3" id="add"  name="whychoose" ></textarea>

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
	</div>

	<input class="btn btn-success" type="submit" value="Submit" id="submit">
	<input class="btn btn-danger" type="reset" value="Reset">
	
		</form>
		
		<br>
		<button class="btn-warning" onclick="window.print()">Print This Page</button>

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
  
  /* Get max serial no */
  
  /*$result=mysqli_query($con,"SELECT Max(serialno) from entrance");
  $row=mysqli_fetch_array($result);
  $no=$row['Max(serialno)'];
  $no++;*/
  
  
  
  $doj=$_POST['doj'];
  $roll_no=$_POST['roll_no'];
  $firstname=$_POST['firstname'];
  $midname=$_POST['midname'];
  $lastname=$_POST['lastname'];
  $birthday=$_POST['birthday'];
  $gender=$_POST['gender'];
  $bloodgroup=$_POST['bloodgroup'];
  $interest=$_POST['interest'];
  $skills=$_POST['skills'];
  $currentaddress=$_POST['currentaddress'];
  $permanentaddress=$_POST['permanentaddress'];
  $countrycode=$_POST['countrycode'];
  $stdcode=$_POST['stdcode'];
  $studmobile=$_POST['studmobile'];
  $studemail=$_POST['studemail'];
  $github=$_POST['github'];
  $fathername=$_POST['fathername'];
  $fathermobile=$_POST['fathermobile'];
  $fatheremail=$_POST['fatheremail'];
  $guardianname=$_POST['guardianname'];
  $guardianmobile=$_POST['guardianmobile'];
  $schoolname=$_POST['schoolname'];
  $tenthper=$_POST['tenthper'];
  $twealthper=$_POST['twealthper'];
  $course=$_POST['course'];
  $semester=$_POST['semester'];
  $cgpa=$_POST['cgpa'];
  $onlinecourses=$_POST['onlinecourses'];
  $projectname=$_POST['projectname'];
  $projecttype=$_POST['projecttype'];
  $projectduration=$_POST['projectduration'];
  $projectdescr=$_POST['projectdescr'];
  $knowdc=$_POST['knowdc'];
  $referencename=$_POST['referencename'];
  $whychoose=$_POST['whychoose'];
  
  
/*
    echo $firstname . " " . $doj . " " . $firstname . " " . $midname . " " . $lastname . " " . $birthday . " " . $gender . " " . $bloodgroup . " " . $interest . " " . " " . $currentaddress . " " . $permanentaddress . " " . 
 $countrycode . " " . $stdcode . " " . $studmobile . " " . $studemail . " " . $github . " " . $fathername . " " . $fathermobile . " " . $fatheremail . " " .  $guardianname . " " . $guardianmobile . " " .  $schoolname . " " . 
 $tenthper . " " . $twealthper . " " . $course . " " . $semester . " " . $cgpa . " " . $onlinecourses . " " . $projectname . " " . $projectduration . " " . $projectdescr . " " . $knowdc . " " . $
 encename . " " . $whychoose ;

*/

 $sql="INSERT INTO entrance VALUES('$roll_no','$doj', '$firstname', '$midname', '$lastname', '$birthday', '$gender', '$bloodgroup', '$interest', '$skills', '$currentaddress', '$permanentaddress', 
 '$countrycode', '$stdcode', '$studmobile', '$studemail', '$github', '$fathername', '$fathermobile', '$fatheremail', '$guardianname', '$guardianmobile', '$schoolname', 
'$tenthper', '$twealthper', '$course', '$semester', '$cgpa', '$onlinecourses', '$projectname','$projecttype', '$projectduration', '$projectdescr', '$knowdc', '$referencename', '$whychoose') ";
  
  mysqli_query($con,$sql);
  


?>
<?php 
    include('footer.php');
?>


</body>
</html>

