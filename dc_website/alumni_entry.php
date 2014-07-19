<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Alumni Registration</title>

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
                	<h1 class="page-header">Alumni Registration</h1>
            	</div>

        	</div>

        	<form role="form" action="alumni_entry.php" method="POST">
        		<div class="form-group">
					<div class="col-md-12" style="border:1px solid black;border-radius:10px;background-color:#EEEEEE;">
						<label>
							<h2>Insert information of Alumni</h2>
						</label><br/>
						<br>

						<div class="row">
							<div class="col-md-6">
								<label>Name :</label>
								<input type="text" name="name" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Year of Passing :</label>
								<input type="text" name="year_of_passing" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Occupation :</label>
								<input type="text" name="occupation" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Github Id :</label>
								<input type="text" name="github_id" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>LinkedIn Id :</label>
								<input type="text" name="linkedin_id" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Twitter Username :</label>
								<input type="text" name="twitter_username" class="form-control">
							</div>
						</div>	
						<br>
						<input class="btn btn-success"type="submit" value="Submit" id="submit" name="Submit">
						<br>
						<br>
					</div>	
				</div>
			</form>

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