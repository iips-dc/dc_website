
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>projects</title>

    <!-- Bootstrap core CSS -->
      <?php
        include ('date_picker.php');
      ?>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

    </style>

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


   <?php 
        include ('header.php');
   ?>
    <br><br>
    <div class="col-lg-12">
                <h1 class="page-header">Projects
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="current_projects.php">Current Projects</a>
                    </li>
                    <li><a href="past_projects.php">Past Projects</a>
                    </li>
                    <li><a href="pstatus.php">Projects Report</a>
                    </li>
                </ol>
            </div>

    <div class="container">
          
          
   <!-- <form role="form" method="post" action="#">
		   <div class="row">
			  <div class="col-xs-2">
			    <input type="text" class="form-control" placeholder="Date" name="date" id="datepicker" >
			  </div>
        <div class="col-xs-2">
          <input type="text" class="form-control" placeholder="project_id" name="project_id">
        </div>
			  <div class="col-xs-4">
			    <input type="text" class="form-control" placeholder="Daily Log" name="log">
			  </div>
			  <div class="col-xs-3">
			    <input type="text" class="form-control" placeholder="Link(if any)" name="link">
			  </div>
			</div>
      <br>
			<input class="btn btn-success" type="submit" value="Submit" id="submit" name="submit" >
	</form> -->

  <?php

$DBServer = 'localhost';
$DBUser   = 'root';
$DBPass   = 'pulkit5-1';
$DBName   = 'dc_database';
$conn = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if (mysqli_connect_errno()) {
  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}



// if(isset($_POST['submit']))
// {
//   $date=$_POST['date'];
//   $log=$_POST['log'];
//   $link=$_POST['link'];
//   $member_id=$_POST['member_id'];
//   $sql= "INSERT INTO `dc_database`.`daily_log` (`date`,`log`,`link`,`s_no`,`member_id`) VALUES ('$date', '$log','$link',' ','$member_id');";
//    mysqli_query($conn, $sql);
// }
$sql='SELECT * FROM projects';
 
?>
<?php
$con=mysqli_connect("localhost","root","pulkit5-1","dc_database");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM projects ");

//echo "<div class='table-responsive'>"
echo "<table class='table table-hover'>";

  echo "<td>".'PROJECT ID'."<td>". 'PROJECT NAME' . "<td>" . 'PROJECT TYPE'."<td>". 'PROJECT LEADER'."<td>". 'TEAM_MEMBERS'."<td>". 'TEAM ID'."<td>". 'DC PAGE LINK'."<td>". 'GITHUB PAGE LINK';
 

while($row = mysqli_fetch_array($result))
  {
    
  echo "<tr>";
  echo "<td>".$row['project_id']."<td>". $row['project_name'] . "<td>" . $row['project_type']."<td>". $row['project_leader']."<td>". $row['team_members']."<td>". $row['project_status']."<td>". $row['team_id']."<td>". $row['dc_page_link']."<td>". $row['github_page_link'];
  echo "</tr>";
 
  }
   echo "</table>";
   //echo "</div>";

mysqli_close($con);
?>

  </div>

  
<?php 
        include ('footer.php');
   ?>
</body>

</html>

