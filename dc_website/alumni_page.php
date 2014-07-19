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

	<body style="background-color:#EEEEEE;">
		<?php 
			include 'database_connect.php';
			include 'header.php';
		?>


		<div class="container">
		 	<div class="row">

            	<div class="col-lg-12">
                	<br>
                	<h1 class="page-header">Our Alumni</h1>
            	</div>

            	<?php
            		$query = "SELECT  * FROM `alumni`";
            		$query_run = mysqli_query($dbconnect, $query);

            		echo "<table class="table table-hover">";
            		echo "<th>";
            		echo "<td> Name </td> <td> Year of Passing </td> <td> Occupation </td> <td> Github Id </td> <td> LinkedIn Id </td> <td> Twitter Username </td>";
            		echo "</th>";

            		while ($row = mysqli_fetch_array($query_run)) {
            			# code...
            			echo "<tr>";
            			echo "<td>".$row['name']."<td>".$row['year_of_passing']. "<td>".$row['occupation']. "<td>".$row['github_id']. "<td>".$row['linkedin_id']. "<td>".$row['twitter_username']. "</td>";
            			echo "</tr>";
            		}

            		echo "</table>";
            	?>

        	</div>

			<?php			
				include ('footer.php');
			?>
		</div>
	</body>
</html>