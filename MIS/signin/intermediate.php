 <?php
//echo "string"; 

 
include ('database_connect.php');
$sql="SELECT * FROM `dc_members`";
$result = mysqli_query($dbconnect,$sql) or die('ERROR'.mysqli_error($dbconnect));
echo $email=$_GET['email'];
echo "<br><br>";
while($row = mysqli_fetch_array($result))
  {
    //echo $email;
   
  if($row['members_email'] == $email){
    echo "string";
    header("Location:../knowledge_center/search.php");
     break;
  } 
  
  }
  echo "You are not a authorised user!";


?>