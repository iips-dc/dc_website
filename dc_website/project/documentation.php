<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Documentation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php 
        include ('header.php');
   ?>

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Projects
                    
                </h1>
                <ol class="breadcrumb">
                  <li><a href="project_mgm.php">Home</a>
                    </li>
                    <li><a href="current_projects.php">Current Projects</a>
                    </li>
                    <li><a href="past_projects.php">Past Projects</a>
                    </li>
                    <li><a href="review.php">Project Reviews</a>
                    </li>
                    <li><a href="documentation.php">Documentation</a>
                    </li>
                    <li><a href="add_project.php">Add Project</a>
                    </li>
                    <li><a href="add_documentation.php">Add Documentation</a>
                    </li>
                    
                    
                    
                </ol>
            </div>

        </div>

        

  <?php

$DBServer = 'localhost';
$DBUser   = 'root';
$DBPass   = 'root';
$DBName   = 'dc_database';
$conn = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if (mysqli_connect_errno()) {
  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}




$sql='SELECT * FROM documentation';
 
?>
<?php
$con=mysqli_connect("localhost","root","root","dc_database");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM documentation ");

//echo "<div class='table-responsive'>"
echo "<table class='table table-hover'>";

  echo "<td>".'DATE'."<td>". 'PROJECT NAME' . "<td>" . 'PROJECT ID'."<td>". 'SPMP LINK'."<td>". 'SPMP STATUS'."<td>". 'SRS LINK'."<td>". 'SRS STATUS'."<td>". 'SDD LINK'."<td>". 'SDD STATUS'."<td>". 'STD LINK'."<td>". 'STD STATUS';
 

while($row = mysqli_fetch_array($result))
  {
    
  echo "<tr>";
  echo "<td>".$row['date_of_documentation']."<td>". $row['project_name'] . "<td>" . $row['project_id']."<td>". $row['spmp_link']."<td>". $row['spmp_status']."<td>". $row['srs_link']."<td>". $row['srs_status']."<td>". $row['sdd_link']."<td>". $row['sdd_status']."<td>". $row['std_link']."<td>". $row['std_status'];
  echo "</tr>";
 
  }
   echo "</table>";
   //echo "</div>";

mysqli_close($con);
?>

  </div>

  <?php 
    include('footer.php');
?>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
