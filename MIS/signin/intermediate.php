 <?php
//echo "string"; 

<<<<<<< HEAD
 session_start();
include ('../database_connect.php');

$sql="SELECT * FROM `dc_member_social`";
=======
 
include ('database_connect.php');
$sql="SELECT * FROM `dc_members`";
>>>>>>> a2c134ef00595665b3cedf939b93b176d52d8faf
$result = mysqli_query($dbconnect,$sql) or die('ERROR'.mysqli_error($dbconnect));
echo $email=$_GET['email'];
echo "<br><br>";
while($row = mysqli_fetch_array($result))
  {
    //echo $email;
   
<<<<<<< HEAD
  if($row['email'] == $email){
    echo "string";
    header("Location:../dashboard/dashboard.php");
=======
  if($row['members_email'] == $email){
    echo "string";
    header("Location:http://localhost/dc_site_master/dc_website/MIS/dashboard/post.php");
>>>>>>> a2c134ef00595665b3cedf939b93b176d52d8faf
     break;
  } 
  
  }
  echo "You are not a authorised user!";


?>