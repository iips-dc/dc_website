<?php


$server = "localhost";
$username = "root";
$password="pulkit5-1";
$database="dc_database";

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
  
  
  $doj=$_POST['doj'];
  $firstname=$_POST['firstname'];
  $midname=$_POST['midname'];
  $lastname=$_POST['lastname'];
  $month=$_POST['month'];
  $date=$_POST['date'];
  $year=$_POST['year'];
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
    echo $firstname . " " . $doj . " " . $firstname . " " . $midname . " " . $lastname . " " . $month . " " . " " . $year . " " . $gender . " " . $bloodgroup . " " . $interest . " " . " " . $currentaddress . " " . $permanentaddress . " " . 
 $countrycode . " " . $stdcode . " " . $studmobile . " " . $studemail . " " . $github . " " . $fathername . " " . $fathermobile . " " . $fatheremail . " " .  $guardianname . " " . $guardianmobile . " " .  $schoolname . " " . 
 $tenthper . " " . $twealthper . " " . $course . " " . $semester . " " . $cgpa . " " . $onlinecourses . " " . $projectname . " " . $projectduration . " " . $projectdescr . " " . $knowdc . " " . $referencename . " " . $whychoose ;

*/

 $sql="INSERT INTO entrance ('s_no','doj', 'firstname', 'midname', 'lastname', 'month', 'date', 'year', 'gender', 'bloodgroup', 'interest', 'skills', 'currentaddress', 'permanentaddress', 
 'countrycode', 'stdcode', 'studmobile', 'studemail', 'github', 'fathername', 'fathermobile', 'fatheremail', 'guardianname', 'guardianmobile', 'schoolname', 
'tenthper', 'twealthper', 'course', 'semester', 'cgpa', 'onlinecourses', 'projectname', 'projectduration', 'projectdescr', 'knowdc', 'referencename', 'whychoose' ) VALUES('','$doj', '$firstname', '$midname', '$lastname', '$month', '$date', '$year', '$gender', '$bloodgroup', '$interest', '$skills', '$currentaddress', '$permanentaddress', 
 '$countrycode', '$stdcode', '$studmobile', '$studemail', '$github', '$fathername', '$fathermobile', '$fatheremail', '$guardianname', '$guardianmobile', '$schoolname', 
'$tenthper', '$twealthper', '$course', '$semester', '$cgpa', '$onlinecourses', '$projectname', '$projectduration', '$projectdescr', '$knowdc', '$referencename', '$whychoose' ) ";
  
  mysqli_query($con,$sql);
  


?>