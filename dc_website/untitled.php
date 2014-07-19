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

        	</div>

        	
			<?php
				if (isset($_POST['Submit'])) {
					# code...
					$name = $_POST['name'];
					$year_of_passing = $_POST['year_of_passing'];
					$occupation = $_POST['occupation'];
					$github_id = $_POST['github_id'];
					$linkedin_id = $_POST['linkedin_id'];
					$twitter_username = $_POST['twitter_username'];

					$query = "INSERT INTO `alumni` (`name`, `year_of_passing`, `occupation`, `github_id`, `linkedin_id`, `twitter_username`) VALUES('$name', '$year_of_passing', '$occupation', '$github_id', '$linkedin_id', '$twitter_username')";
					$query_run = mysqli_query($dbconnect, $query);
				}
			
				include ('footer.php');
			?>
		</div>
	</body>
</html>