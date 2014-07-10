
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Development Center</title>

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
        include ('taskbar_signin.php')
   ?>
   


          
            </div>
   <form role="form" method="post" action="#">
       <div class="row">
        <div class="col-xs-5">
         
             
              <select class="form-control" placeholder="DC member" name="pro">
              <option value="it-2k11-25">Pulkit Vaishnav</option>
              <option value="it-2k11-32">Sachin Tanwar</option>
              <option value="it-2k11-10">Devendra Malviya</option>
              <option value="all">All</option>
              </select>
              
        </div>
      </div>
      <br>
      <input class="btn btn-success" type="submit" value="Submit" id="submit" name="submit" >
  </form>



<?php
$con=mysqli_connect("localhost","root","root","dc_database");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['submit'])){
          if($_POST['pro']=='all'){
            $result = mysqli_query($con,"SELECT * FROM daily_log  ");

          }
          else{
            $result = mysqli_query($con,"SELECT * FROM daily_log WHERE member_id= '".$_POST['pro']." ' ");
          }

          

//echo "<div class='table-responsive'>"
echo "<table class='table table-hover'>";

while($row = mysqli_fetch_array($result))
  {
    
  echo "<tr>";
  echo "<td>".$row['member_id']."<td>". $row['date'] . "<td>" . $row['log']."<td>". $row['link'];
  echo "</tr>";
 
  }
   echo "</table>";
   //echo "</div>";

mysqli_close($con);

  }


?>


  

</body>

</html>

