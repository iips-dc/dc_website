<?php


$server = "";
$username = "root";
$password="root";
$database="dc_database";

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
  
  /* Get max serial no */
  
  $result=mysqli_query($con,"SELECT Max(serialno) from dc_member_master");
  $row=mysqli_fetch_array($result);
  $no=$row['Max(serialno)'];
  $no++;
  
  
  $id=$_POST['id'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $birthday=$_POST['birthday'];
  $gender=$_POST['gender'];
  $bloodgroup=$_POST['bloodgroup'];
  $currentaddress=$_POST['currentaddress'];
  $permanentaddress=$_POST['permanentaddress'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  $guardianname=$_POST['guardianname'];
  $course=$_POST['course'];
  $github=$_POST['github'];
  $linkedin=$_POST['linkedin'];
  $semester=$_POST['semester'];
 
  

 

$sql="INSERT INTO dc_member_master VALUES('$id', '$firstname', '$lastname', '$birthday', '$gender', '$bloodgroup', '$currentaddress', 
  '$permanentaddress', '$fathername', '$mothername', '$guardianname', '$course', '$github', 'linkedin', '$semester') ";
  
  mysqli_query($con,$sql);
  


?>