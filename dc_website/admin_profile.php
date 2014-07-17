<?php
include ('header.php');
echo "<br><br><br>";
include ('admin_taskbar.php');
echo "<br><br>";
$connect=mysqli_connect('localhost','root','root','dc_database');
  if($connect)
    echo "Connected";
  else
    echo "Not connected";

    $retrival=mysqli_query($connect,"SELECT * FROM `dc_member_master` WHERE email ='$email'");

    if(!$retrival)
{
}

while($row = mysqli_fetch_array($retrival, MYSQL_ASSOC))
{
    $id = $row['member_id'];
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $midname=$row['mid_name'];
    $github= $row['github_id'];
	$birthday=$row['date_of_birth'];
	$gender=$row['gender'];
	$bloodgroup=$row['blood_group'];
	$localaddress=$row['local_address'];
	$parmanentaddress=$row['parmanent_address'];
	$fathername=$row['father_name'];
	$mothername=$row['mother_name'];
	$guardianname=$row['guardian_name'];
	$course=$row['course_name'];
	$linkedin=$row['linkedin_id'];
	$soj=$row['sem_of_joining'];
  

}
?>
<?php
session_start();


function space($no)
{
	for($i=0;$i<$no;$i++)
		echo '&nbsp;';
}

$server = "localhost";
$username = "root";
$password="root";
$database="dc_database";



$id = $_SESSION['id'];

$con=mysqli_connect($server,$username,$password,$database);
//echo'<script>alert("Member ID' . $_SESSION['id'] . '");</script>';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
  
  
if(isset($_POST['editsubmit']))
{
	
	  $id=$_POST['id'];
	  $firstname=$_POST['firstname'];
	  $midname=$_POST['midname'];
	  $lastname=$_POST['lastname'];
	  $birthday=$_POST['birthday'];
	  $gender=$_POST['gender'];
	  $bloodgroup=$_POST['bloodgroup'];
	  $localaddress=$_POST['localaddress'];
	  $parmanentaddress=$_POST['parmanentaddress'];
	  $fathername=$_POST['fathername'];
	  $mothername=$_POST['mothername'];
	  $guardianname=$_POST['guardianname'];
	  $course=$_POST['course'];
	  $github=$_POST['github'];
	  $linkedin=$_POST['linkedin'];
	  $soj=$_POST['soj'];
  
  
 
 
  
  mysqli_query($con,"update dc_member_master set member_id='$id', first_name='$firstname', last_name='$lastname',mid_name='$midname', father_name='$fathername',
	mother_name='$mothername', guardian_name='$guardianname', date_of_birth='$birthday', gender='$gender', blood_group='$bloodgroup' , course_name='$course', local_address='localaddress', 
	parmanent_address='$parmanentaddress' , github_id='$github' ,sem_of_joining='$soj' , linkedin_id='$linkedin' where member_id='$id'");
  echo '<script>alert("Edited Successfully!");</script>';

  
  
  
  
  
}
  
  
  
 
	
  
/*
  
  $sql="select * from dc_member_master where member_id='$id'";
  
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);
  
  
 
	  
	  $id=$_POST['id'];
	  $firstname=$_POST['firstname'];
	  $midname=$_POST['midname'];
	  $lastname=$_POST['lastname'];
	  $birthday=$_POST['birthday'];
	  $gender=$_POST['gender'];
	  $bloodgroup=$_POST['bloodgroup'];
	  $localaddress=$_POST['localaddress'];
	  $parmanentaddress=$_POST['parmanentaddress'];
	  $fathername=$_POST['fathername'];
	  $mothername=$_POST['mothername'];
	  $guardianname=$_POST['guardianname'];
	  $course=$_POST['course'];
	  $github=$_POST['github'];
	  $linkedin=$_POST['linkedin'];
	  $soj=$_POST['soj'];
  
  */
?>

<!DOCTYPE html>
<html>
	<head>	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title>Development Center</title>

	<script>
	 function slow(e)
 	
  	e.scrollAmount=0;
	}
  	function fast(e)
 	{
  	e.scrollAmount=8;
 	}
	</script>
	</head>
	<body>
		<div class="container" style="border:2px solid;">
			<nav class="navbar navbar-default navbar-static-top text-center" style="background-color:#EEEEEE;border-radius:5px"> <label style="color:grey"><h2>Development Center</h2></label></nav>
         <!--		 <nav class="navbar navbar-default navbar-static-top text-center" style="background-color:grey;border-radius:1px"> <label style="color:white"><h3>Profile</h3></label></nav> -->
			<!-- img tag is started-->
			   <h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp Admin Profile</h3>
				<div class="col-md-3">
				
				<table width="600px" align="center" border="5px">
		<center> <h1>Not Approved</h1></center>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>From </th>
			<th>To</th>
			<th>Reason</th>
			<th>Message</th>
			<th>Approve</th>
			<th>Reject</th>
		</tr>	
		<?php
			$con = mysqli_connect('localhost','root','','dc_database');
			$selectQuery=mysqli_query($con,"SELECT * FROM `leave` WHERE approve=0") or die(mysqli_error($con));
			$i=1;
			while($row=mysqli_fetch_array($selectQuery)){
				$id=$row['id'];
				$name=$row['name'];
				$leaving_date=$row['leaving_date'];
				$coming_date=$row['coming_date'];
				$reason=$row['reason'];
				$message=$row['message'];
		?>	
			<tr align="center">
			<td><?php echo $i; ?></td>	
			<td><?php echo $name; ?></td>
			<td><?php echo $leaving_date; ?></td>
			<td><?php echo $coming_date; ?></td>
			<td><?php echo $reason; ?></td>
			<td><?php echo $message; ?></td>
			<td><a href='Approve.php?app=<?php echo $id; ?>'>Approve</a></td> 
			<td><a href='reject.php?app=<?php echo $id; ?>'>Reject</a></td> 
			</tr>
		<?php
		$i=$i+1;
			}		
		?>
	</table>



		<!-- <?php 
				
				if(file_exists("images/" . $sno . ".jpg"))
				{
					$imagefile="images/" . $sno . ".jpg" ;
				}
				else
					$imagefile="images/image001.png" ;
				
				?>
				<img width=165 height=187 id="_x0000_i1025" src="<?php echo $imagefile ; ?>" alt="TextBox:  &#13;&#10;      &#13;&#10;">
				<br>
				<form action="upload.php" method="post" enctype="multipart/form-data">

				<input type="file" size="10" name="file" id="file"><br>
				<input type="submit" name="submit" value="<?php 
				if(file_exists("images/" . $sno . ".jpg"))
					echo "Edit your pic!";
				else echo "Add your pic!";
				?>">
				
				
				</form>
				<br><br>
				<a class="btn btn-primary"  id='logout' href="logout.php" role="button">Logout</a>
				
				</div>
				
				
				<form action='' method='post'>
					
				
				<?php 
				

				echo'
				<div class="col-md-6">
				<div>Name';
				space(24);
				
echo '  <input type="text" class="editme" name="firstname" size="10" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" disabled value="' .$firstname .'  "><input type="text" class="editme" size="10" name="midname" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" disabled value="' . $midname . '"> <input type="text" class="editme" name="lastname" size="10" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" disabled value="' . $lastname  . '"> </div>
		
				<div>Member ID ';
				space(9);
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="id" class="editme" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="'  . $id .'  "> </div>

				<div>Father name ';
				space(9);
				echo '&nbsp;&nbsp;&nbsp;  <input type="text" name="fathername" class="editme" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="'  . $fathername .'  "> </div>
				
				<div>Guardian name ';
				space(8);
				echo '  <input type="text" name="guardianname" class="editme" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="'  . $guardianrname .'  "> </div>

				<div>Mother name ';
				space(9);
				echo '&nbsp;&nbsp;  <input type="text" name="mothername" class="editme" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="'  . $mothername .'  "> </div>
				
				<div>Date of birth';
				space(14);
				echo '  <input type="text" class="editme" name="birthday"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" size="10" disabled  value=" ' . $birthday . '"></div>
				
				<div>Gender ';
				space(20);
				echo '&nbsp;  <input type="text" size="5" class="editme" name="gender"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="' . $gender . '"> </div>
				
				<div>Course ';
				space(21);
				echo '  <input type="text" class="editme" name="course"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $course.' "> </div>
				
				<div>Parmanent Address';
				space(2);
				echo '  <input type="text" class="editme" name="parmanentaddress" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $parmanentaddress . ' "> </div>
				
				<div>Local Address';
				space(11);
				echo '  <input type="text" class="editme" name="localaddress" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $localaddress . ' "> </div>

				<div>Linkedin ';
				space(18);
				echo '&nbsp;  <input type="text" class="editme" name="linkedin"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $linkedin .  ' "> </div>
				
				<div>Github ';
				space(21);
				echo '&nbsp;  <input type="text" class="editme" name="github"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $github .  ' "> </div>


				<div>Blood Group ';
				space(13);
				echo '  <input type="text" class="editme" name="bloodgroup"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $bloodgroup . '"> </div>
				
				<div> Sem of joining';
				space(11);
				echo '  <input type="text" class="editme" name="soj" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="  ' . $soj . '"> </div>
				
			    '
				?>


				<a class="btn btn-primary"  id='editbutton' href="#" onclick='editme()' role="button">Edit</a>


				<input type='submit' style='display:none' class="btn btn-primary" id='submitbutton' name='editsubmit' onsubmit='editme()' value='Submit'>
				
				</form>
				</div>
				<div class="col-md-3">
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/vaishnavpulkit"  data-widget-id="459712514687647744">Tweets by @vaishnavpulkit</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

				<div class="col-md-3">
					<div class="panel panel-default" style="border:1px solid grey;">
						<div class="panel-heading text-center" style="background-color:grey;border-bottom:1px solid grey;color:white;height:40px">
						<label>Updates</label>
						</div>	
						<br><br><br><br><br><br><br>
						<div class="panel-body text-center">
							<marquee direction="up" style="color:#000066" scrollamount="4" onmouseover="javascript:slow(this);" onmouseout="javascript:slow(this);">
								<u><a href="http://google.com">Attendence</a></u><br>
								<u><a href="http://google.com">Results Declared</a></u>		<br>
								<u><a href="http://google.com">Syllabus</a></u><br>
								<u><a href="http://google.com">fees information</a></u><br>
							</marquee>						
						</div>
					</div>	
				</div>-->
				
			<!--</div>
               

			
		</div>
		<br><br>
		<br>
		<?php include('footer.php') ?>  ->
		
	<script>
	function editme()
	{
		document.getElementsById('editme').style.ba='red';
		//alert('');
		//editme.style.background-color='red';
	}
	
	$(document).ready()
	{
	
		$( "#editbutton" ).click(function() {
		
		
			$('.editme').removeAttr('style');
			$('.editme').removeAttr('disabled');
			$('#submitbutton').removeAttr('style');
			
		/*$('#editme').css('disabled','no');
		$('#editme').css('enabled','');
		$('#editme').css('border-color','black');
		$('#editme').css('border-top','black');
	
		$('#editme').css('border-left','black');*/
		});
	
	
	

	
	
	}
	
	
	</script>







		
	</body>
</html>