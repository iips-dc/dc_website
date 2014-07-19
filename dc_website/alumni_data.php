<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Alumni</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">

      <!-- Add custom CSS here -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

  <?php 
      include 'database_connect.php';
      include ('header.php');
  ?>

      <div class="container">
          <div class="row">

              <div class="col-lg-12">
                  <h1 class="page-header">
                    Our Alumni  
                  </h1>
              </div>

          </div>

  <?php
      $result = mysqli_query($dbconnect, "SELECT * FROM alumni");

      echo "<table class='table table-hover'>";
      echo "<td>".'NAME'."<td>". 'YEAR OF PASSING' . "<td>" . 'OCCUPATION'."<td>". 'GITHUB ID'."<td>". 'LINKEDIN ID'."<td>". 'TWITTER USERNAME'."</td>";
       
      while($row = mysqli_fetch_array($result))
        {
          
          echo "<tr>";
          echo "<td>".$row['name']."<td>". $row['year_of_passing'] . "<td>" . $row['occupation']."<td>". $row['github_id']."<td>". $row['linkedin_id']."<td>". $row['twitter_username']."</td>";
          echo "</tr>";
        }
      echo "</table>";
      
      mysqli_close($dbconnect);
  ?>

    </div>
    <?php 
      include('footer.php');
    ?>
    
      <!-- JavaScript -->
      <script src="js/jquery-1.10.2.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/modern-business.js"></script>

  </body>

</html>