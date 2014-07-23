<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hosting_Domain</title>

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
                <h1 class="page-header">Hosting Domain
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="hosting.php">Home</a>
                    </li>
                    <li><a href="add_domain.php">Add new Hosting Domain</a>
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
  
?>
<?php
$con=mysqli_connect("localhost","root","root","dc_database");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM hosting_domain ");

//echo "<div class='table-responsive'>"
echo "<table class='table table-hover'>";

  echo "<td>".'S. NO'."<td>". 'HOSTING' . "<td>" . 'DOMAIN'."<td>". 'URL'."<td>". 'DATE OF EX'."<td>". 'DATE OF REGISTRATION';
 

while($row = mysqli_fetch_array($result))
  {
    
  echo "<tr>";
  echo "<td>".$row['s_no']."<td>". $row['hosting'] . "<td>" . $row['domain']."<td>". $row['url']."<td>". $row['doe']."<td>". $row['dor'];
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
