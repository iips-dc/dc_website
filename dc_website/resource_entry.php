<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Resource Entry</title>

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
                	<h1 class="page-header">Resource Entry</h1>
            	</div>

        	</div>

        	<form role="form" action="resource_entry.php" method="POST">
        		<div class="form-group">
					<div class="col-md-12" style="border:1px solid black;border-radius:10px;background-color:#EEEEEE;">
						<label>
							<h2>Insert information of Resources</h2>
						</label><br/>
						<br>

						<div class="row">
							<div class="col-md-6">
								<label>Resource Id:</label>
								<input type="text" name="resource_id" class="form-control">
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Resource Name:</label>
								<input type="text" name="resource_name" class="form-control">
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
					$resource_id = $_POST['resource_id'];
					$resource_name = $_POST['resource_name'];

					$query = "INSERT INTO `resource` (`resource_id`, `resource_name`) VALUES('$resource_id', '$resource_name')";
					$query_run = mysqli_query($dbconnect, $query);
				}
			
				include ('footer.php');
			?>
		</div>
	</body>
</html>